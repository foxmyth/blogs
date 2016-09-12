<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Contracts\Auth\Guard;

class PasswordController extends Controller
{
   	use ResetsPasswords;

   	public function __construct()
   	{
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
   		$this->validation(['email' => 'required|email']);
   		$response = $this->passwords->sendResetLink($request->only('email'), function($message) {
   			$message->subject('Password Remider');
   		});

   		switch ($response) {
   			case PasswordBroker::RESET_LINK_SENT:   			
   				return redirect()->back()->with('status', trans($response));
   				break;
   			case PasswordBroker::INVLID_USER:
   				return redirect()->bacK()->withError('status', trans($response));   			
   		}
   	}
}
