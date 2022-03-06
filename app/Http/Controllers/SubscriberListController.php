<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SubscriberList;
use App\Subscriber;
use App\BrandProfile;
use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

class SubscriberListController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $brand_profile = BrandProfile::where('user_id',$user_id)->first();
        $subscriber_lists = SubscriberList::where('brand_profile_id',$brand_profile->id)->get();
        return view('subscriber_list.index', compact('subscriber_lists'));
    }      

    public function create()
    {
        return view('subscriber_list.add_list');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        try {
            $subscriber_list = SubscriberList::where('id',$id)->first();
            return view('subscriber_list.edit_list', compact('subscriber_list'));
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();
        $brand_profile = BrandProfile::where('user_id',$user_id)->first();
        $this->validate($request,[ 
            'name'=>'required', 
        ]);
        try {
        $subscriber_list= new SubscriberList;
        $subscriber_list->name = $request->name;
        $subscriber_list->brand_profile_id = $brand_profile->id;
        $subscriber_list->save();
            toastSuccess('Successfully Added');
            return redirect('dashboard/subscribe_list');
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function update(Request $request)
    {
        $user_id = Auth::id();
        $brand_profile = BrandProfile::where('user_id',$user_id)->first();
        // dd($request);
        $this->validate($request,[ 
            'name'=>'required', 
        ]);
        try {
        $subscriber_list= SubscriberList::find($request->id);
        $subscriber_list->name = $request->name;
        $subscriber_list->brand_profile_id = $brand_profile->id;
        $subscriber_list->save();
        toastSuccess('Successfully Update');
        return redirect('dashboard/subscribe_list');
        
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function destroy($id)
    {
        try {
            SubscriberList::FindorFail($id)->delete();
            toastr()->success('Successfully Deleted');
            return back();
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }
}
