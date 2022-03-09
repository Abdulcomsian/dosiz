<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductCategory;
use App\BrandProfile;
use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redirect;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $brand_profile = BrandProfile::where('user_id',$user_id)->first();
        if($brand_profile)
        {
            $product_categories = ProductCategory::get();
            return view('product_category.index', compact('product_categories'));
        }
        else{
            toastError('Kindly Complete Your Profile First');
            return Redirect::back();
        }
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
        $brand_profile = BrandProfile::where('user_id',$user_id)->first();
        $this->validate($request,[ 
            'category_name'=>'required', 
            'category_slug'=>'required|unique:product_categories,category_name,'.$request->id,
        ]);
        try {
        $product_category= new ProductCategory;
        $product_category->category_name = $request->category_name;
        $product_category->category_slug = $request->category_slug;
        $product_category->brand_profile_id = $brand_profile->id;
        $product_category->save();
            toastSuccess('Successfully Added');
            return redirect('dashboard/p_category');
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
        return redirect('dashboard/p_category');
        
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
            if($exception->getCode() == 23000)
            {
                toastError("First delete Product under this Category");
            }
            else
            {
                toastError("Something went wrong");
            }
            // toastError($exception->getMessage());
            return Redirect::back();
        }
    }
}
