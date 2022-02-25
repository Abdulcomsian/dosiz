<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class dashboardController extends Controller
{
    public function index()
    {
        $user = User::where('id',Auth::id())->first();
        return view('dashboard',compact('user'));
    }   

    
}
