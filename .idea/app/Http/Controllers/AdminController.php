<?php


namespace App\Http\Controllers;


use App\Category;
use App\Product;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function dashboard(){
        return view('admin.dashboard');

    }
    public function categories(){
        $categories = Category::all();
        return view('admin.categories.categories', ['categories'=>$categories]);


    }
    public function products(){
        $products = Product::all();
        return view('admin.products.products', ['products'=>$products]);


    }
}
