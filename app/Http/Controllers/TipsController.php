<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Banner;
use App\Company;
use App\Post;
use App\Category;

class TipsController extends Controller
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
        $tips = Post::where('id_category', '=', 4) ->get();
        return view('tips', compact('company', 'menu', 'tips'));
    }

    public function tipsCategory($id)
    {
        $company = Company::all();
        $menu = Category::where('id_category_type', '=', 1)->get();
        $tip = Post::where('id', '=', $id)->first();
        return view('tipCategory', compact('company', 'menu', 'tip'));
    }

}
