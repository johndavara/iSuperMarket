<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recipes', 'RecipesController@index')->name('recipes');
Route::get('/recipes/{idCategory}', 'RecipesController@recipesCategory');
Route::get('/recipes/{idCategory}/{id}', 'RecipesController@recipeDetails');
Route::post('/recipes/comment', 'RecipesController@comment')->name('commentRecipe');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{id}', 'NewsController@getNew');
Route::get('/tips', 'TipsController@index')->name('tips');
Route::get('/tips/{idCategory}', 'TipsController@tipsCategory');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contactPost', 'ContactController@post')->name('contactPost');

Auth::routes();

Route::get('/sitemap', function() {
    Sitemap::create()
   ->add('/home')
   ->add('/recipes')
   ->add('/recipes/{idCategory}')
   ->add('/recipes/{idCategory}/{id}')
   ->add('/news')
   ->add('/news/{id}')
   ->add('/tips')
   ->add('/tips/{idCategory}')
   ->add('/contact')
   ->add('/contactPost')
   ->writeToFile('sitemap.xml');
    return 'Sitemap created';
});