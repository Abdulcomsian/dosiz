<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

class categoryController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        if(Auth::user()->hasRole('Admin'))
        {
            $categories = Category::get();
        }
        elseif(Auth::user()->hasRole('Brand Manager'))
        {
            $categories = Category::where('user_id',$user_id)->get();
        }
        
        return view('category.index', compact('categories'));
    }      

    public function create()
    {
        return view('category.add');
    }

    public function show($id)
    {

    }

    public function store(Request $request)
    {
        $user_id = Auth::id();
        $this->validate($request,[ 
            'name'=>'required', 
            'category_slug'=>'required|unique:categories,name,'.$request->id,
        ]);
        try {
        $category= new Category;
        $category->name = $request->name;
        $category->user_id = $user_id;
        $category->category_slug = $request->category_slug;

        $category->save();
            toastSuccess('Successfully Added');
            return redirect('dashboard/category');
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastError('Something went wrong, try again');
            return Redirect::back();
        }
    }

    public function update(Request $request)
    {
        // dd($request);
        $user_id = Auth::id();
        $this->validate($request,[ 
            'name'=>'required', 
            // 'category_slug'=>'required|unique:categories,category_slug,'. $request->id .'id',
        ]);
        try {
        $category= Category::find($request->category_id);
        $category->name = $request->name;
        $category->user_id = $user_id;
        $category->category_slug = $request->category_slug;
        $category->save();
        toastSuccess('Successfully Update');
        return redirect('dashboard/category');
        
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError('Something went wrong, try again');
            return Redirect::back();
        }
    }

    public function destroy($id)
    {
        try {
            Category::FindorFail($id)->delete();
            toastr()->success('Successfully Deleted');
            return back();
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }


}