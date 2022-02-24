<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Auth;
use App\Category;
use App\Utils\HelperFunctions;
use Illuminate\Support\Facades\Redirect;

class productController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('product.index', compact('products'));
    }      

    public function create()
    {
        $user_id = Auth::id();
        $categories = Category::where('user_id',$user_id)->get();
        return view('product.add_product', compact('categories'));
    }

    public function show($id)
    {
        try {
            $product = Product::where('id',$id)->first();
            return view('product.show_product', compact('product'));
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $user_id = Auth::id();
        $this->validate($request,[ 
            'name'=>'required', 
            'product_slug'=>'required|unique:products,name,'.$request->id,
            'image'=>'required', 
            'category_id'=>'required', 
            'description'=>'required', 
            'status'=>'required', 

        ]);
        try {
        $Product= new Product;
        $Product->name = $request->name;
        $Product->user_id = $user_id;
        $Product->product_slug = $request->product_slug;
        $Product->category_id = $request->category_id;
        $Product->price = $request->price;
        $Product->description = $request->description;
        if ($request->file('image')) {
            $filePath = HelperFunctions::productImagePath();
            $image = HelperFunctions::saveFile(null, $request->file('image'), $filePath);
        }
        $images = [];
        if ($request->file('images')) {
            $filePath = HelperFunctions::productImagePath();
            $files = $request->file('images');
            foreach ($files  as $key => $file) {
                $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                $data = [
                    $key => $imagename
                ];
                $images = array_merge($images, $data);
            }
        }
        $Product->image = $image;
        $Product->images = $images;
        $Product->save();
        toastSuccess('Successfully Added');
        return redirect('dashboard/product');
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastError('Something went wrong, try again');
            return Redirect::back();
        }
            }

    public function edit($id)
    {
        try {
            $user_id = Auth::id();
            $categories = Category::where('user_id',$user_id)->get();
            $product = Product::where('id',$id)->first();
            return view('product.edit_product', compact('product','categories'));
        } catch (\Exception $exception) {
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }

    public function update(Request $request,$product)
    {
        // dd($request->all());
        $user_id = Auth::id();
        $this->validate($request,[ 
            'name'=>'required', 
            'product_slug'=>'required|unique:products,name,'.$request->id,
            'category_id'=>'required', 
            'description'=>'required', 
            'status'=>'required', 

        ]);
        try {
        $Product= Product::find($product);
        $images=$Product->images;
        // dd($request->all());
        $new_array = array();
        foreach($request->preloaded as $img)
        {
             $new_array[]= $img;
        }
        $Product->name = $request->name;
        $Product->user_id = $user_id;
        $Product->product_slug = $request->product_slug;
        $Product->category_id = $request->category_id;
        $Product->price = $request->price;
        $Product->description = $request->description;
        if ($request->file('image')) {
            $filePath = HelperFunctions::productImagePath();
            $image = HelperFunctions::saveFile(null, $request->file('image'), $filePath);
            $Product->image = $image;
        }
        if ($request->file('images')) {
            $filePath = HelperFunctions::productImagePath();
            $files = $request->file('images');
            foreach ($files  as $key => $file) {
                $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                
                $new_array[] =  $imagename ;
            }
        }
       
        
        $Product->images =  $new_array;
        $Product->save();
        toastSuccess('Successfully Updated');
        return redirect('dashboard/product');
        } catch (\Exception $exception) {
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function destroy(Request $request , $id)
    {
        try {
                $filePath = Product::FindorFail($id);
                Product::FindorFail($id)->delete();
                foreach($filePath->images as $image)
                {
                    @unlink($image);
                }
                @unlink($filePath->image);
               
            toastr()->success('Successfully Deleted');
            return back();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastError('Something went wrong, try again');
            return Redirect::back();
        }
        
    }
}
