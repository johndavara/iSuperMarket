<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Banner;
use App\Company;
use App\Post;

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
        $banner = Banner::all();// For Slider
        $company = Company::all(); // For Footer
        $recipies = Post::where('id', '=', 1) //For Recipies section
        ->where('id_category_type', '=', 1)// category type menu
        ->get();
        $news = Post::where('id', '=', 2)// For News section
        ->where('id_category_type', '=', 1)// category type menu
        ->get();
        $tips = Post::where('id', '=', 3)// For tips section
        ->where('id_category_type', '=', 1)// category type menu
        ->get();

        return view('home', compact('banner','company','recipies'));
    }
}
