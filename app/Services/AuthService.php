<?php 

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
*
*
* https://tuts.codingo.me/laravel-social-and-email-authentication
* https://github.com/codingo-me/laravel-social-email-authentication
*/
class AuthService 
{
	public function __construct(Mail $mail)
	{
		$this->mail = $mail;
	}
	
	public function sendResetMail(Request $request, $subject)
	{
		//TODO: reset mail의 view 작업하기
		
		$data = $request->only('name', 'email');

		$this->mail->send('email.reset', 
		                  [''],
		                  function($message) use ($data) {
		                  	$message->subject($subject)
		                  		 	->to($data->email);		                  		 	
		                  }
	}
}