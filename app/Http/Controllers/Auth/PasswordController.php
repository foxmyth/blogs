<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;

use Password;
use Illuminate\Mail\Message;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Contracts\Auth\PasswordBroker;

class PasswordController extends Controller
{
   	use ResetsPasswords;

   	public function __construct(Guard $auth, PasswordBroker $passwords)
   	{
   		$this->auth = $auth;
   		$this->passwords = $passwords;

   		$this->middleware('guest');
   	}

   	/**
   	 * Send link for reset password.
   	 * 
   	 * @param  Request $request 
   	 * @return Response
   	 */
   	public function postEmail(Request $request)
   	{
   		$this->validate($request, ['email' => 'required|email']);

   		$response = $this->passwords->sendResetLink($request->only('email'), function(Message $message) {
   			$message->subject('Password Remider');
   		});

   		switch ($response) {
   			case PasswordBroker::RESET_LINK_SENT:   			
   				return redirect()->back()->with('status', trans($response));

   			case PasswordBroker::INVLID_USER:
   				return redirect()->back()->withError('status', trans($response));   			
   		}
   	}
}
