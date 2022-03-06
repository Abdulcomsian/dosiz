<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscriber;
use App\BrandProfile;
use App\SubscriberList;
use Auth;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Exports\SubscribersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SubscribersImport;


class EmailSubscribeController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('Brand Manager'))
        {
            $user_id = Auth::id();
            $brand_profile = BrandProfile::where('user_id',$user_id)->first();
            if($brand_profile)
            {
                $subscribers = Subscriber::where('brand_profile_id',$brand_profile->id)->get();  
                $subscriber_lists = SubscriberList::where('brand_profile_id',$brand_profile->id)->get();  
            }
            else{
                toastError('Kindly Complete your profile first');
                return Redirect::back();
            }
        }
        else
        {
        $subscribers = Subscriber::get();
        $subscriber_lists = SubscriberList::get();  
        }
        return view('subscriber.index', compact('subscribers','subscriber_lists'));
    }      

    public function create()
    {
        try {
        $user_id = Auth::id();
        $brand_profile = BrandProfile::where('user_id',$user_id)->first();
        if($brand_profile)
        {
            return view('subscriber.add');
        }
        else{
            toastError('Kindly Complete your profile first');
            return Redirect::back();
        }
        
        
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
        $this->validate($request,[ 
            'name'=>'required', 
            'email'=>'required|unique:subscribers,email,'.$request->id,
            'phone'=>'required',
        ]);
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
                $subscriber->subscriber_list_id = $request->subscriber_list_id;
                if($request->subscriber_list_id == 2)
                {
                    $user_id = Auth::id();
                    $brand_profile = BrandProfile::where('user_id',$user_id)->first();
                    $subscriber->brand_profile_id = $brand_profile->id;
                }
                elseif($request->subscriber_list_id == 1)
                {
                    $subscriber->brand_profile_id = $request->brand_profile_id;
                }
                $subscriber->save();
                toastSuccess('Successfully Subscribe');
                return redirect('dashboard/subscribe');
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

    public function importExportView()
    {
       return view('subscriber.import');
    }

    public function import(Request $request) 
    {
        $subscriber_list_id = $request->subscriber_list_id;
        // dd($subscriber_list_id);
        Excel::import(new SubscribersImport($subscriber_list_id),request()->file('file'));
           
        return back();
    }   

    public function send_email(Request $request) 
    {
        
         Subscriber::where('subscriber_list_id',$request->subscriber_list_id)->chunk(2 , function($email){
            $user_id = Auth::id();
            $brand_profile = BrandProfile::where('user_id',$user_id)->first();
            foreach($email as $subscriber)
            {
                \Mail::to($subscriber->email)->send(new \App\Mail\MyEmail($brand_profile));
            }
         });
        
        return redirect('dashboard/subscribe');
    }
}
