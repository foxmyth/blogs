<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // protected $paginate = PAGENATE_NUMBER;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the member record associated with the user.
     * 
     * @return array member record
     */
    public function member()
    {
        return $this->hasOne('App\Member');
    }

    /**
     * Select user's information by id
     * 
     * @param  integer $id User's id (primary key)
     * @return array   $user
     */
    public function getUserInformation($id) 
    {
        $user = $this->join('members', function($join) {
                            $join->on('users.id', '=', 'members.user_id');                                 
                        })
                     ->select('users.*', 'members.profile', 'members.is_active', 'members.is_admin')
                     ->where('members.user_id', '=', $id)
                     ->first();

        return $user;
    }

    /**
     * List the users ordered by admin type
     * 
     * @return array user and member recode
     */
    public function listUserOrderByAdminType() 
    {
        $users = $this->join('members', 'users.id', '=', 'members.user_id')
                      ->select('users.*', 'members.profile', 'members.location', 'members.mobile', 'members.is_active', 'members.is_admin')
                      ->orderby('is_admin')
                      ->paginate(PAGENATE12);

        return $users;
    }

    public function getNewCommingUser()    
    {
        $user = $this->join('members', 'users.id', '=', 'members.user_id')
                     ->select('users.*', 'members.profile')
                     ->orderby('users.created_at', 'desc')
                     ->first();

        return $user;
    }
}
