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
        $recipies = Category::where('id_parent_category', '=', 2) ->get();
        $news = Post::join('categories' , 'categories.id' , '=','post.id_category') //For news section
        ->where('categories.id', '=', 3) 
        ->select('post.id','post.id','post.id_language','post.id_category','post.title', 'post.description',
        'post.meta_description','post.meta_keyword', 'post.meta_author', 'post.meta_viewport','post.image_url','post.image_alt','post.image_tooltip'
        ,'post.post_order','post.video_url')
        ->get();
        
    
        $tips = Post::join('categories' , 'categories.id' , '=','post.id_category') //For news section
        ->where('categories.id', '=', 4) 
        ->select('post.id','post.id','post.id_language','post.id_category','post.title', 'post.description',
        'post.meta_description','post.meta_keyword', 'post.meta_author', 'post.meta_viewport','post.image_url','post.image_alt','post.image_tooltip'
        ,'post.post_order','post.video_url')
        ->get();


    return view('home',compact('menu','banner','company','recipies','news','tips'));
    }
}
