<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\Models\User;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //echo Auth::id();
        $id = Auth::id();
        $user = User::find($id);
        //echo $user->type;
        //return view('home');
      if($user->type ==2){
            return view('admin.dashboard');
     }elseif($user->type==1){
            return view('manager.dashboard'); 
     }else
            return view('home');

    }
}
