<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactUs;
use App\BrandProfile;
use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

class ContactUsController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $brand_profile = BrandProfile::where('user_id',$user_id)->first();
        $contact_us = ContactUs::where('brand_profile_id',$brand_profile->id)->get();
        return view('contact_us.index', compact('contact_us'));
    }      



    public function show($id)
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[ 
            'f_name'=>'required', 
            'l_name'=>'required', 
            'email'=>'required', 
            'phone'=>'required',  
            'subject'=>'required',  
        ]);
        try {
        $contact_us= new ContactUs;
        $contact_us->f_name = $request->f_name;
        $contact_us->l_name = $request->l_name;
        $contact_us->email = $request->email;
        $contact_us->phone = $request->phone;
        $contact_us->subject = $request->subject;
        $contact_us->brand_profile_id = $request->id;
        $contact_us->save();
            toastSuccess('Successfully Posted');
            return Redirect::back();
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError('Something went wrong, try again');
            return Redirect::back();
        }
    }


    public function destroy($id)
    {
        try {
            ContactUs::FindorFail($id)->delete();
            toastr()->success('Successfully Deleted');
            return back();
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }
}
