<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Banner;
use App\Company;
use App\Post;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $menu = Category::where('id_category_type', '=', 1)->get();
       $banner = Banner::all();// For Slider
        $company = Company::all(); // For Footer
        $recipies = Post::join('categories' , 'categories.id' , '=','post.id_category') //For Recipies section
        ->where('categories.id_category_type', '=', 2)// category type menu
        ->where('categories.id', '=', 2) 
        ->get();
        $news = Post::join('categories' , 'categories.id' , '=','post.id_category') //For news section
        ->where('categories.id_category_type', '=', 3)// category type menu
        ->where('categories.id', '=', 3) 
        ->get();
        $tips = Post::join('categories' , 'categories.id' , '=','post.id_category') //For tips section
        ->where('categories.id_category_type', '=', 4)// category type menu
        ->where('categories.id', '=', 4) 
        ->get();


    return view('home',compact('menu','banner','company','recipies','news','tips'));
    }
}
