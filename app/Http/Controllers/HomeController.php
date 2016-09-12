<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User as User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user  = new User;
        $profile = $user->getUserInformation(Auth::user()->id);
        $new_comming = $user->getNewCommingUser();

        return view('home')->with('profile', $profile)->with('new_comming', $new_comming);
    }

    /**
     * Logout 
     * @return [type] [description]
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
