<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;
use App\Post;
use App\Category;

class RecipesController extends Controller
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
        $recipies = Category::where('id_parent_category', '=', 2) ->get();
        return view('recipes', compact('company', 'menu', 'recipies'));
    }

    public function recipesCategory($id)
    {
        $company = Company::all();
        $menu = Category::where('id_category_type', '=', 1)->get();
        $category = Category::find($id);
        $recipes = Post::where('id_category', '=', $id) ->get();
        return view('recipesCategory', compact('company', 'menu', 'category', 'recipes'));
    }

    public function recipeDetails($idCateg, $id)
    {
        $company = Company::all();
        $menu = Category::where('id_category_type', '=', 1)->get();
        $category = Category::find($idCateg);
        $recipe = Post::find($id);
        return view('recipeDetails', compact('company', 'menu', 'category', 'recipe'));
    }
}
