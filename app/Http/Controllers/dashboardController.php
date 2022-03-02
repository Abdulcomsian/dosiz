<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Redirect;

class dashboardController extends Controller
{
    public function index()
    {
        $user = User::where('id',Auth::id())->first();
        return view('dashboard',compact('user'));
    }   

    public function profile_setting(){
        $user = User::where('id',Auth::id())->first();
        return view('profile.index',compact('user'));
    }

    public function profile_update(Request $request)
    {
        $this->validate($request,[ 
            'name'=>'required', 
            'phone'=>'required', 
            'address'=>'required', 
            'date_of_birth'=>'required', 
            'description'=>'required', 
        ]);
        try {
        $user= User::find($request->id);;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        $user->description = $request->description;
        $user->save();
            toastSuccess('Successfully Updated');
            return redirect('dashboard/dashboard');
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    
}
