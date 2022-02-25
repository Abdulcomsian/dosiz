<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Auth;
use App\User;
use DB;
use App\Category;
use App\City;
use App\Blog;
use App\BrandProfile;
use App\Utils\HelperFunctions;
use Illuminate\Support\Facades\Redirect;

class BrandProfileController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $brand_profiles = BrandProfile::get();
        $b_profile = BrandProfile::where('user_id',$user_id)->first();
        return view('brand_profiles.index', compact('brand_profiles' ,'b_profile'));
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
            $brand_profile = BrandProfile::where('id',$id)->first();
            return view('brand_profiles.show_brand', compact('brand_profile'));
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
            'city_id'=>'required',

        ]);

        try {
        $brand_profile= new BrandProfile;
        $brand_profile->brand_name = $request->brand_name;
        $brand_profile->user_id = $user_id;
        $brand_profile->category_id = $request->category_id;
        $brand_profile->description = $request->description;
        $brand_profile->address = $request->address;
        $brand_profile->city_id = $request->city_id;
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
            $cities = City::get();
            $brand_profile = BrandProfile::where('id',$id)->first();
            // dd($brand_profile->font['header_font']);
            return view('brand_profiles.edit_brand', compact('brand_profile','categories','cities'));
        } catch (\Exception $exception) {
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function update(Request $request,$id)
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
            'city_id'=>'required',

        ]);
        try {
        $brand_profile= BrandProfile::find($id);
        $brand_profile->brand_name = $request->brand_name;
        $brand_profile->user_id = $user_id;
        $brand_profile->category_id = $request->category_id;
        $brand_profile->description = $request->description;
        $brand_profile->address = $request->address;
        $brand_profile->city_id = $request->city_id;
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
            @unlink($brand_profile->brand_logo);
            $filePath = HelperFunctions::brandProfileImagePath();
            $brand_logo = HelperFunctions::saveFile(null, $request->file('brand_logo'), $filePath);
            $brand_profile->brand_logo = $brand_logo;
        }
        if ($request->file('brand_image')) {
            @unlink($brand_profile->brand_image);
            $filePath = HelperFunctions::brandProfileImagePath();
            $brand_image = HelperFunctions::saveFile(null, $request->file('brand_image'), $filePath);
            $brand_profile->brand_image = $brand_image;
        }
        
        $brand_profile->color = $colors;
        $brand_profile->font = $fonts;
 
        $brand_profile->save();
        toastSuccess('Successfully Updated');
        return redirect('dashboard/brand_profile');
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function destroy(Request $request , $id)
    {
        // try {
        //         $filePath = Product::FindorFail($id);
        //         Product::FindorFail($id)->delete();
        //         foreach($filePath->images as $image)
        //         {
        //             @unlink($image);
        //         }
        //         @unlink($filePath->image);
               
        //     toastr()->success('Successfully Deleted');
        //     return back();
        // } catch (\Exception $exception) {
        //     dd($exception->getMessage());
        //     toastError('Something went wrong, try again');
        //     return Redirect::back();
        // }
        
    }

    public function get_sub_category($id)
    {
        $get_sub_category = DB::table("sub_categories")->where("category_id",$id)->pluck("name","id");
        return json_encode($get_sub_category);
    }

    public function brand_profile($brand_id)
    {
        $brand_profile = BrandProfile::where('id',$brand_id)->first();
        $user = User::where('id',$brand_profile->user_id)->first();
        $blog_1 = Blog::where('user_id',$user->id)->first();
        $blog_2 = Blog::where('user_id',$user->id)->skip(1)->first();
        $blog_3 = Blog::where('user_id',$user->id)->skip(2)->first();
        return view('brand_profiles.website.index',compact('brand_profile','blog_1','blog_2','blog_3','user'));
    }

    public function products($brand_id)
    {
        $brand_profile = BrandProfile::where('id',$brand_id)->first();
        $products = Product::where('user_id',$brand_profile->user_id)->get();
        return view('brand_profiles.website.products',compact('products'));
    }

    public function blogs($brand_id)
    {
        $brand_profile = BrandProfile::where('id',$brand_id)->first();
        $blogs = Blog::where('user_id',$brand_profile->user_id)->get();
        return view('brand_profiles.website.blogs',compact('blogs','brand_profile'));
    }

    public function blog($brand_id)
    {
        $brand_profile = BrandProfile::where('id',$brand_id)->first();
        $blog = Blog::where('user_id',$brand_profile->user_id)->get();
        return view('brand_profiles.website.blog',compact('blog','brand_profile'));
    }  

    public function articles($brand_id)
    {
        $brand_profile = BrandProfile::where('id',$brand_id)->first();
        $articles = Blog::where('user_id',$brand_profile->user_id)->get();
        return view('brand_profiles.website.articles',compact('articles','brand_profile'));
    }
}
