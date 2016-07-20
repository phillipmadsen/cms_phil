<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        // echo "<pre>";
        // var_dump($products);
        // echo "</pre>";
        //die();
         //dd($products);
         return view('frontend.shop.index',['products' => $products]);
        //return view('frontend.shop.index', compact('products', $products));
    }

    /**
     * Display the specified product.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function product($slug)
    {
        //$product = Product::findBySlug($slug);



        return view('frontend.shop.product', ['product' => Product::findBySlug($slug)]);

    }
}
