<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Auth;
use DB;
use App\Category;
use App\BrandProfile;
use App\SubCategory;
use App\Utils\HelperFunctions;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();
        return view('blog.index', compact('blogs'));
    }      

    public function create()
    {
        try {
            $user_id = Auth::id();
            $brand_profile = BrandProfile::where('user_id',$user_id)->first();
            $category = Category::where('id',$brand_profile->category_id)->first();
            $categories = Category::get();
            return view('blog.add_blog', compact('categories','category'));
        } catch (\Exception $exception) {
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function show($id)
    {
        try {
            $blog = Blog::where('id',$id)->first();
            return view('blog.show_blog', compact('blog'));
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
            'image'=>'required', 
            'category_id'=>'required', 
            'description'=>'required', 
            'status'=>'required', 

        ]);
        try {
        $blog= new Blog;
        $blog->name = $request->name;
        $blog->user_id = $user_id;
        $blog->category_id = $request->category_id;
        $blog->description = $request->description;
        if ($request->file('image')) {
            $filePath = HelperFunctions::blogImagePath();
            $image = HelperFunctions::saveFile(null, $request->file('image'), $filePath);
        }
        $images = [];
        if ($request->file('images')) {
            $filePath = HelperFunctions::blogImagePath();
            $files = $request->file('images');
            foreach ($files  as $key => $file) {
                $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                $data = [
                    $key => $imagename
                ];
                $images = array_merge($images, $data);
            }
        }
        $blog->image = $image;
        $blog->images = $images;
        $blog->save();
        toastSuccess('Successfully Added');
        return redirect('dashboard/blog');
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
            $blog = Blog::where('id',$id)->first();
            return view('blog.edit_blog', compact('blog','categories'));
        } catch (\Exception $exception) {
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function update(Request $request,$blog)
    {
        // dd($request->all());
        $user_id = Auth::id();
        $this->validate($request,[ 
            'name'=>'required', 
            'category_id'=>'required', 
            'description'=>'required', 
            'status'=>'required', 

        ]);
        try {
        $blog= Blog::find($blog);
        $images=$blog->images;
        // dd($request->all());
        $new_array = array();
        foreach($request->preloaded as $img)
        {
             $new_array[]= $img;
        }
        $blog->name = $request->name;
        $blog->user_id = $user_id;
        $blog->category_id = $request->category_id;
        $blog->description = $request->description;
        if ($request->file('image')) {
            $filePath = HelperFunctions::blogImagePath();
            $image = HelperFunctions::saveFile(null, $request->file('image'), $filePath);
            $blog->image = $image;
        }
        if ($request->file('images')) {
            $filePath = HelperFunctions::blogImagePath();
            $files = $request->file('images');
            foreach ($files  as $key => $file) {
                $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                
                $new_array[] =  $imagename ;
            }
        }
       
        
        $blog->images =  $new_array;
        $blog->save();
        toastSuccess('Successfully Updated');
        return redirect('dashboard/blog');
        } catch (\Exception $exception) {
            toastError($exception->getMessage());
            return Redirect::back();
        }
    }

    public function destroy(Request $request , $id)
    {
        try {
                $filePath = Blog::FindorFail($id);
                Blog::FindorFail($id)->delete();
                foreach($filePath->images as $image)
                {
                    @unlink($image);
                }
                @unlink($filePath->image);
               
            toastr()->success('Successfully Deleted');
            return back();
        } catch (\Exception $exception) {
            toastError($exception->getMessage());
            return Redirect::back();
        }
        
    }

}
