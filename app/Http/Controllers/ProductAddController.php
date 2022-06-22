<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class ProductAddController extends Controller
{
    public function index()
    {
        return view('productAddPage');
    }

    public function add(Request $request)
    {

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        return redirect()->back();

    }

    public function deletePage()
    {

        try {
            $products = Product::all();
        } catch (\Exception $e) {
            echo $e;
        }
        return view('productDeletePage')->with('products', $products);
    }

    public function delete(Request $request)
    {
        Product::where('id', $request->id)
            ->delete();

        return redirect()->back();
    }

    public function newsPage()
    {
        return view('newsAddPage');
    }

    public function newsAdd(Request $request)
    {
        try {
            $news = new News;
            $news->title = $request->title;
            $news->contents = $request->contents;
            $news->save();
        } catch (Exception $e) {
            echo $e;
        }
        return redirect()->back();
    }

    public function deleteNewsPage()
    {
        try {
            $news = News::all();
        } catch (\Exception $e) {
            echo $e;
        }
        return view('newsDeletePage')->with('news', $news);
    }

    public function deleteNews(Request $request)
    {
        try {
            News::where('id', $request->id)
                ->delete();
        } catch (\Exception $e) {
            echo $e;
        }
        return redirect()->back();
    }

    public function productUpdatePage()
    {
        try {
            $products = Product::all();
        } catch (\Exception $e) {
            echo $e;
        }
        return view('productUpdatePage')->with('products', $products);
    }

    public function productUpdate(Request $request)
    {
        try {
            Product::where('id', $request->id)
                ->update(['name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'stock' => $request->stock]);
        } catch (\Exception $e) {
            echo $e;
        }
        return redirect()->back();
    }

    public function newsUpdatePage()
    {
        try {
            $news = News::all();
        } catch (\Exception $e) {
            echo $e;
        }
        return view('newsUpdatePage')->with('news', $news);
    }

    public function newsUpdate(Request $request)
    {
        try {
            News::where('id', $request->id)
                ->update(['title' => $request->title,
                    'contents' => $request->contents]);
        } catch (\Exception $e) {
            echo $e;
        }
        return redirect()->back();
    }
}
