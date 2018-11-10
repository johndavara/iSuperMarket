<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Banner;
use App\Company;
use App\Post;
use App\Category;

class NewsController extends Controller
{

    /**
     * Show recipes content.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        $menu = Category::where('id_category_type', '=', 1)->get();
        $news = Post::join('categories' , 'categories.id' , '=','post.id_category') //For news section
        ->where('categories.id', '=', 3) 
        ->select('post.id','post.id','post.id_language','post.id_category','post.title', 'post.description',
        'post.meta_description','post.meta_keyword', 'post.meta_author', 'post.meta_viewport','post.image_url','post.image_alt','post.image_tooltip'
        ,'post.post_order','post.video_url')
        ->get();
        return view('news', compact('company', 'menu', 'news'));
    }

    public function getNew($id)
    {
        $company = Company::all();
        $menu = Category::where('id_category_type', '=', 1)->get();
        return view('getNew', compact('company', 'menu'));
    }
}
