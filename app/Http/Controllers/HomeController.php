<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        $categories = DB::table("categories")->select("id","cat_image","title_".app()->getLocale()." as title","description_".app()->getLocale()." as description")->get();
        $product = DB::table("products")->select("id","cate_image","title_".app()->getLocale()." as title","description_".app()->getLocale()." as description")->get() ;
        
        return view('home',compact('user' , 'categories' , 'product'));
    }
}
