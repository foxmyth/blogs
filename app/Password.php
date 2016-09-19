<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use User;
use Hash, Carbon\Carbon;

/**
* Password reset model
*/
class Password extends Model
{
	
	protected $table = 'password_resets';

	public $timestamps = false;

	function setPassword(User $user) 
	{
		$this->email = $user->email;
		$this->token = sha1(mt_rand());
		$this->created_at = Carbon::now();

	}
}