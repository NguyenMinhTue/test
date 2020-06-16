 <?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@home');

Route::get('/home', 'PagesController@home');
Route::get('/category/{id}/{name}', 'PagesController@category');
Route::get('/best-product', 'PagesController@bestproduct');

Route::get('/mail','PagesController@mail');

Route::get('/product/{id}/{name}','PagesController@chitietsanpham');
Route::get('/gioithieu','PagesController@gioithieu');
Route::get('/dichvu','PagesController@dichvu');
 Route::get('/checkout','PagesController@checkout');
 Route::get('/admin/login','AdminController@login');
 Route::get('/admin/dashboard','AdminController@dashboard');
 Route::get('/admin/categories','AdminController@categories');
 Route::get('/admin/products','AdminController@products');

