<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

class SubCategoryController extends Controller
{
    public function index()
    {
        $sub_categories = SubCategory::get();
        return view('admin.sub_category.index', compact('sub_categories'));
    }      

    public function create()
    {
        $categories = Category::get();
        return view('admin.sub_category.add',compact('categories'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        try {
            $categories = Category::get();
            $sub_category = SubCategory::where('id',$id)->first();
            return view('admin.sub_category.edit_sub_category', compact('sub_category','categories'));
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }

    public function store(Request $request)
    {
        $this->validate($request,[ 
            'name'=>'required', 
            'category_id'=>'required', 
            'sub_category_slug'=>'required|unique:categories,name,'.$request->id,
        ]);
        try {
        $sub_category= new SubCategory;
        $sub_category->name = $request->name;
        $sub_category->category_id = $request->category_id;
        $sub_category->sub_category_slug = $request->sub_category_slug;
        $sub_category->save();
            toastSuccess('Successfully Added');
            return redirect('admin/sub_category');
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
            'category_id'=>'required', 
            'name'=>'required', 
            // 'category_slug'=>'required|unique:categories,category_slug,'. $request->id .'id',
        ]);
        try {
        $sub_category= SubCategory::find($request->id);
        $sub_category->category_id = $request->category_id;
        $sub_category->name = $request->name;
        $sub_category->sub_category_slug = $request->sub_category_slug;
        $sub_category->save();
        toastSuccess('Successfully Update');
        return redirect('admin/sub_category');
        
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError('Something went wrong, try again');
            return Redirect::back();
        }
    }

    public function destroy($id)
    {
        try {
            SubCategory::FindorFail($id)->delete();
            toastr()->success('Successfully Deleted');
            return back();
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }
}
