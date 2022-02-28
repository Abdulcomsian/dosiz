<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductCategory;
use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::get();
        return view('product_category.index', compact('product_categories'));
    }      

    public function create()
    {
        return view('product_category.add');
    }

    public function show($id)
    {

    }

    public function store(Request $request)
    {
        $user_id = Auth::id();
        $this->validate($request,[ 
            'category_name'=>'required', 
            'category_slug'=>'required|unique:product_categories,category_name,'.$request->id,
        ]);
        try {
        $product_category= new ProductCategory;
        $product_category->category_name = $request->category_name;
        $product_category->category_slug = $request->category_slug;
        $product_category->user_id = $user_id;
        $product_category->save();
            toastSuccess('Successfully Added');
            return redirect('brand/p_category');
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastError('Something went wrong, try again');
            return Redirect::back();
        }
    }

    public function update(Request $request)
    {
        // dd($request);
        $this->validate($request,[ 
            'category_name'=>'required', 
            // 'category_slug'=>'required|unique:categories,category_slug,'. $request->id .'id',
        ]);
        try {
        $product_category= ProductCategory::find($request->category_id);
        $product_category->category_name = $request->category_name;
        $product_category->category_slug = $request->category_slug;
        $product_category->save();
        toastSuccess('Successfully Update');
        return redirect('brand/p_category');
        
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError('Something went wrong, try again');
            return Redirect::back();
        }
    }

    public function destroy($id)
    {
        try {
            ProductCategory::FindorFail($id)->delete();
            toastr()->success('Successfully Deleted');
            return back();
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }
}
