<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\User    as User;
use App\Member  as Member;

class UserController extends Controller
{
    protected $model;
    protected $profile_path = 'profiles/';    

    public function __construct()
    {
        $this->model = new User;
        parent::__construct();
    }

    /**
     * Display a listing of the User
     *
     * @return Response
     */
    public function index()
    {
        // list for all user ordered by admin type
        $users = $this->model->listUserOrderByAdminType();

        return view('members.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Selected User's information on Database.
        $user = $this->model->find($id);

        // File upload
        $path = $this->uploadProfileImage($id, $request->file('profile'));

        // update User And Member's information 
        $user->name = $request->name;        
        $member = $user->member;

        if(!empty($path)) $member->profile = $path;
        $member->location   = $request->location;
        $member->mobile     = $request->mobile;

        try {
            $user->save();
            $member->save();            
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }

        return redirect('profile')->with('status', 'Profile updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get profile information from storage.
     * 
     * @return Response
     */
    public function showProfile() 
    {
        $user = Auth::user();

        if(empty($user)) {
            return redirect()->action('HomeController@index');
        } 

        $member = $this->model->find($user->id)->member;

        return view('users.profile')->with('user', $user)->with('member', $member);
    }

    /**
     * Upload user's profile image.
     * base path is "storage/app/profiles/"
     * 
     * @param  integer $id        user id 
     * @param  array   $profile   user's profile informations
     * @return string  $path      file path 
     */
    private function uploadProfileImage($id, $profile) 
    {
        $path = null;

        //if profile's information for uploaded is empty, file's path is null
        if(empty($profile)) return $path;

        //if profile's information of saved is exist, delete the information.
        $member = Member::where('user_id', $id)->first();
        empty($member->profile)? : Storage::delete($member->profile);

        $filename = str_pad($id, 5, '0', STR_PAD_LEFT).'.'.$profile->extension();

        return $profile->storeAs('profiles', $filename);
    }
}
