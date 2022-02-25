<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::get();
        return view('admin.city.index', compact('cities'));
    }      

    public function create()
    {
        return view('admin.city.add');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        try {
            $city = City::where('id',$id)->first();
            return view('admin.city.edit_city', compact('city'));
        } catch (\Exception $exception) {
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function store(Request $request)
    {
        $this->validate($request,[ 
            'name'=>'required', 
        ]);
        try {
        $city= new City;
        $city->name = $request->name;
        $city->save();
            toastSuccess('Successfully Added');
            return redirect('admin/city');
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function update(Request $request)
    {
        // dd($request);
        $this->validate($request,[ 
            'name'=>'required', 
        ]);
        try {
        $city= City::find($request->id);
        $city->name = $request->name;
        $city->save();
        toastSuccess('Successfully Update');
        return redirect('admin/city');
        
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function destroy($id)
    {
        try {
            City::FindorFail($id)->delete();
            toastr()->success('Successfully Deleted');
            return back();
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }
}
