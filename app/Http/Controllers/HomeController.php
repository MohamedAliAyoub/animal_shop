<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('index');
    }

    public function websiteIndex($id = null, $category = null)
    {
        $products = Product::query()->when($id, function ($query, $id) {
            $query->where('category_id', $id);
        })->with('images', 'category')->get();
        $categories = Category::all();
        return view('website.index', compact('products', 'categories'));
    }

    public function productDetails($id)
    {
        $products = Product::with('images', 'category')->take(5)->get();
        $categories = Category::take(5)->get();
        $product = Product::where('id', $id)->with('images', 'category')->first();
        return view('website.product', compact('products', 'categories', 'product'));
    }

    public function productSearch(Request $request)
    {
        $search = $request->search;
        //        dd($search);
        $products = Product::with('images', 'category')->take(5)->get();
        $categories = Category::take(5)->get();
        $product = Product::where('name', $search)->with('images', 'category')->first();
        if ($product != null)
            return view('website.product', compact('products', 'categories', 'product'));
        else
            return view('website.index', compact('products', 'categories', 'product'))->with('error', 'المنتج غير متاح');


    }

}
