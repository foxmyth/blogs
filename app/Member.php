<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable = [
		'user_id'
	,	'is_active'
	,	'is_admin'
	];
    
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
