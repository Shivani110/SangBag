<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Style;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Material;

class FrontController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    
    public function adminlogin(){
        return view('frontend.adminlogin');
    }

    public function login(){
        return view('frontend.login');
    }

    public function applynow(){
        return view('frontend.applynow');
    }

    public function contactus(){
        return view('frontend.contact_us');
    }

    public function blogdetails(){
        return view('frontend.blogdetails');
    }

    public function blogs(){
        return view('frontend.blogs');
    }

    public function thankyou(){
        return view('frontend.thankyou');
    }

    public function snagmember(){
        return view('frontend.snagmember');
    }

    public function privacypolicy(){
        return view('frontend.privacy-policy');
    }

    public function products(){
        $product = Product::all();
        $style = Style::all();
        $category = ProductCategory::all();
        $brand = Brand::all();
        $color = Color::all();
        $material = Material::all();

        return view('frontend.product',compact('product','style','category','brand','color','material'));
    }
}
