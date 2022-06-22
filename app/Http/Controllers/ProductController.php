<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Product::all();
        } catch (\Exception $e) {
            echo $e;
        }
        return view('products')->with('products', $products);
    }

    public function singleProduct($id)
    {
        try {
            $product = Product::where('id', '=', $id)->get();
            $product = $product[0]->getAttributes();
        } catch (\Exception $e) {
            echo $e;
        }

        return view('singleProduct')->with('product', $product);
    }

    public function singleNews($id)
    {

        try {
            $news = News::where('id', '=', $id)->get();
            $news = $news[0]->getAttributes();
        } catch (\Exception $e) {
            echo $e;
        }

        return view('singleNews')->with('news', $news);
    }
}
