<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscriber;
use App\BrandProfile;
use Auth;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Exports\SubscribersExport;
use Maatwebsite\Excel\Facades\Excel;


class EmailSubscribeController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('Brand Manager'))
        {
            $user_id = Auth::id();
            $brand_profile = BrandProfile::where('user_id',$user_id)->first();
            $subscribers = Subscriber::where('brand_profile_id',$brand_profile->id)->get();
        }
        else
        {
        $subscribers = Subscriber::get();
        }
        return view('subscriber.index', compact('subscribers'));
    }      

    public function create()
    {
        try {
        $user_id = Auth::id();
        
        } catch (\Exception $exception) {
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function show($id)
    {
        try {
            
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // try{
            $subscriber= new Subscriber;
            $subscriber->name = $request->name;
            $chk_email = Subscriber::where('email',$request->email)->first();
            if($chk_email)
            {
               toastError('Already Subscribe, Try with another Email');
               return Redirect::back();     
            }
            else
            {
                $subscriber->email = $request->email;
                $subscriber->phone = $request->phone;
                $subscriber->brand_profile_id = $request->brand_profile_id;
                $subscriber->save();
                toastSuccess('Successfully Subscribe');
                return Redirect::back();
            }

        // } catch (\Exception $exception) {
        //     // dd($exception->getMessage());
        //     toastError('Something went wrong, try again');
        //     return Redirect::back();
        // }
    }

    public function edit($id)
    {
        try {
        } catch (\Exception $exception) {
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function update(Request $request,$product)
    {
        // dd($request->all());
        
        try {
       
        } catch (\Exception $exception) {
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function destroy(Request $request , $id)
    {
        try {
                
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastError('Something went wrong, try again');
            return Redirect::back();
        }
        
    }

    public function export() 
    {
        return Excel::download(new SubscribersExport, 'subscribers.xlsx');
    }
}
