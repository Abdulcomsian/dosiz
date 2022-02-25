<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Auth;
use DB;
use App\Category;
use App\City;
use App\BrandProfile;
use App\Utils\HelperFunctions;
use Illuminate\Support\Facades\Redirect;

class BrandProfileController extends Controller
{
    public function index()
    {
        $brand_profiles = BrandProfile::get();
        return view('brand_profiles.index', compact('brand_profiles'));
    }      

    public function create()
    {
        $user_id = Auth::id();
        $categories = Category::get();
        $cities = City::get();
        return view('brand_profiles.add_brand', compact('categories','cities'));
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
            'brand_name'=>'required', 
            // 'brand_logo'=>'required', 
            // 'brand_image'=>'required', 
            'category_id'=>'required', 
            'header_font'=>'required',
            'header_color'=>'required',
            'footer_font'=>'required',
            'footer_color'=>'required',
            'button_font'=>'required',
            'button_color'=>'required',
            'title_font'=>'required',
            'title_color'=>'required',
            'text_font'=>'required',
            'text_color'=>'required',
            'description'=>'required',
            'address'=>'required',

        ]);

        try {
        $brand_profile= new BrandProfile;
        $brand_profile->brand_name = $request->brand_name;
        $brand_profile->user_id = $user_id;
        $brand_profile->category_id = $request->category_id;
        $brand_profile->description = $request->description;
        $brand_profile->address = $request->address;
        $brand_profile->whatsapp_no = $request->whatsapp_no;

        $fonts = [];
        $colors = [];
        
        $fonts['header_font'] =$request->header_font;
        $fonts['footer_font'] =$request->footer_font;
        $fonts['button_font'] =$request->button_font;
        $fonts['title_font']  =$request->title_font;
        $fonts['text_font']  =$request->text_font;

        $colors['header_color'] =$request->header_color;
        $colors['footer_color'] =$request->footer_color;
        $colors['button_color'] =$request->button_color;
        $colors['title_color']  =$request->title_color;
        $colors['text_color']  =$request->text_color;

        
        if ($request->file('brand_logo')) {
            $filePath = HelperFunctions::brandProfileImagePath();
            $brand_logo = HelperFunctions::saveFile(null, $request->file('brand_logo'), $filePath);
        }
        if ($request->file('brand_image')) {
            $filePath = HelperFunctions::brandProfileImagePath();
            $brand_image = HelperFunctions::saveFile(null, $request->file('brand_image'), $filePath);
        }
        $brand_profile->brand_logo = $brand_logo;
        $brand_profile->brand_image = $brand_image;

        $brand_profile->color = $colors;
        $brand_profile->font = $fonts;
 
        $brand_profile->save();
        toastSuccess('Successfully Added');
        return redirect('dashboard/brand_profile');
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
            }

    public function edit($id)
    {
        try {
            $user_id = Auth::id();
            $categories = Category::get();
            $product = Product::where('id',$id)->first();
            $sub_categories = SubCategory::where('category_id',$product->category_id)->get();
            return view('product.edit_product', compact('product','categories','sub_categories'));
        } catch (\Exception $exception) {
            toastError($exception->getMessage());
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
        $Product->sub_category_id = $request->sub_category;
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

    public function get_sub_category($id)
    {
        $get_sub_category = DB::table("sub_categories")->where("category_id",$id)->pluck("name","id");
        return json_encode($get_sub_category);
    }
}
