<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Slide;


class PagesController extends Controller
{
    function __construct(){
        $categories = Category::all();
        view()->share('categories',$categories);
    }
    public function home(){

//       return view('pages.home',compact('slide'));
    //    $products = Product::;

        return view('pages.home'
           // ['products'=>$products]
         );

    }
    public function bestproduct(){

//       return view('pages.home',compact('slide'));
        //    $products = Product::;

        return view('pages.bestproduct'
        // ['products'=>$products]
        );

    }
    public function products(){
        return view('pages.products');
    }
    public function category($id){
        $products = Product::Where('category_id',$id)->paginate(8);
        $category = Category::Where('id',$id)->first();
        return view('pages.category',
            ['products'=>$products],
            ['category'=>$category]);
    }
    public function mail(){
        return view('pages.mail');
    }
    public function chitietsanpham($id){
        $product = Product::Where('id',$id)->first();
        return view('pages.chitietsanpham',
            ['product'=>$product]);
    }
    public function gioithieu(){
        return view('pages.gioithieu');
    }
    public function dichvu(){
        return view('pages.dichvu');
    }
    public function checkout(){
        return view('pages.checkout');
    }
}
