<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $news = News::all();
            $products = Product::all()->sortByDesc('price');
        } catch (\Exception $e) {
            echo $e;
        }
        return view('welcome')->with(['products' => $products,'news' => $news]);
    }
}
