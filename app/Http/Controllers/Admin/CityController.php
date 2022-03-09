<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;
use App\Utils\HelperFunctions;

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
        // dd($request->file('image'));
        $this->validate($request,[ 
            'name'=>'required', 
            'image'=>'required',
        ]);
        try {
        $city= new City;
        $city->name = $request->name;
        if ($request->file('image')) {
            $filePath = HelperFunctions::cityImagePath();
            $image = HelperFunctions::saveFile(null, $request->file('image'), $filePath);
        }
        $city->image = $image;
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
        if ($request->file('image')) {
            $filePaths = City::FindorFail($request->id);
            @unlink($filePaths->image);
            $filePath = HelperFunctions::cityImagePath();
            $image = HelperFunctions::saveFile(null, $request->file('image'), $filePath);
            $city->image = $image;
        }
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
            $filePath = City::FindorFail($id);
            City::FindorFail($id)->delete();
            @unlink($filePath->image);
            toastr()->success('Successfully Deleted');
            return back();
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }
}
