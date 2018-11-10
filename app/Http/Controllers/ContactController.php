<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Banner;
use App\Company;
use App\Post;
use App\Category;

class ContactController extends Controller
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
        return view('contact', compact('company', 'menu'));
    }

    public function post(){
        $company = Company::all();
        $menu = Category::where('id_category_type', '=', 1)->get();
        return view('contactSuccess', compact('company', 'menu'));
    }
}
