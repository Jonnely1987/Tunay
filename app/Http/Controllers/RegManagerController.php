<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegManagerController extends Controller
{
    public function registermanager(){
        return view('regs.manager');
    }
     
    
}
