<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProductCategory;
use App\Models\Style;
use App\Models\Product;
use App\Models\Media;
use App\Models\Brand;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function category(){
        $category = ProductCategory::all();
        return view('admin.productcategory',compact('category'));
    }

    public function createcategory(Request $request){
        if($request->id){
            $request->validate([
                'name' => 'required',
                'slug' => 'unique:product_categories,slug'
            ]);
            $category = ProductCategory::where('id','=',$request->id)->first();

            $slug = trim($request->name);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug );
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);
            
            $category->category_name = $request->name;
            $category->slug = $slug;
            $category->update();
            $status = "edit";

        }else{
            $request->validate([
                'name' => 'required|unique:product_categories,category_name'
            ]);
    
            $slug = trim($request->name);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug );
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);
    
            $category = new ProductCategory;
            $category->category_name = $request->name;
            $category->slug = $slug;
            $category->save();
            $status = "save";
        }

        return response()->json([$category,$status]);
    }

    public function deleteCategory(Request $request){
        $id = $request->id;
        $category = ProductCategory::where('id','=',$id)->delete();

        return response()->json($category);
    }

    public function styles(){
        $style = Style::all();
        return view('admin.style',compact('style'));
    }

    public function createstyles(Request $request){
        if($request->id){
            $request->validate([
                'name' => 'required',
                'slug' => 'unique:styles,slug'
            ]);
    
            $slug = trim($request->name);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug );
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);
    
            $style = Style::where('id','=',$request->id)->first();
            $style->name = $request->name;
            $style->slug = $slug;
            $style->update();
            $status = "edit";
        }else{
            $request->validate([
                'name' => 'required|unique:styles,name',
            ]);
    
            $slug = trim($request->name);
            $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug );
            $slug= str_replace(' ','-', $slug);
            $slug= strtolower($slug);
    
            $style = new Style;
            $style->name = $request->name;
            $style->slug = $slug;
            $style->save();
            $status = "save";
        }
        
        return response()->json([$style,$status]);
    }

    public function deletestyles(Request $request){
        $id = $request->id;
        $style = Style::where('id','=',$id)->delete();

        return response()->json($style);
    }

    public function brand(){
        $brand = Brand::all();
        return view('admin.brand',compact('brand'));
    }

    public function createbrand(Request $request){
        if($request->id){
            $request->validate([
                'name' => 'required',
            ]);
    
            $brand = Brand::where('id','=',$request->id)->first();
            $brand->brand_name = $request->name;
            $brand->update();
            $status = "edit";

        }else{
            $request->validate([
                'name' => 'required|unique:brands,brand_name',
            ]);
    
            $brand = new Brand;
            $brand->brand_name = $request->name;
            $brand->save();
            $status = "save";
        }
        return response()->json([$brand,$status]);
    }

    public function deletebrands(Request $request){
        $id = $request->id;
        $brand = Brand::where('id','=',$id)->delete();

        return response()->json($brand);
    }

    public function product(){
        $category = ProductCategory::all();
        $style = Style::all();
        $brand = Brand::all();
        return view('admin.product',compact('category','style','brand'));
    }

    public function createproduct(Request $request){
        $request->validate([
            'pname' => 'required',
            'pslug' => 'required|unique:products,product_slug',
            'category' => 'required',
            'style' => 'required',
            'image' => 'required',
            'gimage' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('image')){
            $product_image = $request->file('image');
            $extension = $product_image->getClientOriginalExtension();
            $imagename = time().rand(1,50).'.'.$extension;
            $product_image->move(public_path('images'), $imagename);
        }

        $product = new Product;
        $product->product_name = $request->pname;
        $product->product_slug = $request->pslug;
        $product->category = $request->category;
        $product->style = $request->style;
        $product->product_image = $imagename;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        $files = [];
        if($request->hasFile('gimage')){
            for($i=0; $i<count($request->file('gimage')); $i++){
                $file = $request->file('gimage')[$i];
                $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('images'), $name);
                $path = asset('images/'.$name);
                $files = $name;

                $media = new Media;
                $media->image_name = $files;
                $media->image_path = $path;
                $media->product_id = $product->id;
                $media->save();
            }
        }

        return back()->with('success','Product successfully created..');
    }

    public function allproducts(){
        $product = Product::all();
        return view('admin.productlist',compact('product'));
    }

    public function editproduct($slug){
        $product = Product::where('product_slug','=',$slug)->first();
        $category = ProductCategory::all();
        $style = Style::all();
        $brand = Brand::all();
        return view('admin.product',compact('product','category','style','brand'));
    }

    public function updateproduct(Request $request){
        $id = $request->p_id;
        $product = Product::where('id','=',$id)->first();

        if($request->file('image') != null){
            $product_image = $request->file('image');
            $extension = $product_image->getClientOriginalExtension();
            $imagename = time().rand(1,50).'.'.$extension;
            $product_image->move(public_path('images'), $imagename);
        }else{
            $imagename = $product->product_image;
        }

        $productS = Product::where('id','=',$id)->first();
        $productS->product_name = $request->pname;
        $productS->product_slug = $request->pslug;
        $productS->category = $request->category;
        $productS->style = $request->style;
        $productS->product_image = $imagename;
        $productS->price = $request->price;
        $productS->description = $request->description;    
        $productS->update();
        
        return back()->with('success','Products successfully updated..');
    }

    public function deleteProduct(Request $request){
        $product = Product::where('id','=',$request->id)->delete();
        return response()->json($product);
    }
}
