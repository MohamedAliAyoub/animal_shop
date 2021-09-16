<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = Category::get();
        $items = Product::query()->with(['category', 'images'])->paginate(30);
//        dd($items);
        return view('dashboard.products.index', compact('items', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'number' => 'required|string',
            'description' => 'required|string',
            'images' => 'required',
            'images[].*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        Product::create([
            'name' => $request->name,
            'number' => $request->number,
            'description' => $request->description,
            'category_id' => $request->category_id,

        ]);
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time() . $image->getClientOriginalName();
                $image->move(public_path('/images/'), $name);
                $product_id = Product::latest()->first('id')->id;
                Image::query()->create(['image' => $name, 'product_id' => $product_id]);
            }
        }
        return redirect()->route('product.index')->with(['success ', 'تم الاضافة بنجاح']);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showProduct = Product::query()->with('images')->first();
        dd($showProduct);
        return redirect()->route('product.index')->with(['success ', 'تم الاضافة بنجاح']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Product $product
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Product $product, Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'number' => 'required|string',
            'description' => 'required|string',
        ]);
        $product->images()->whereNotIn('id', $request->post('old_images') ?? [])->get()->each(function (Image $image) {
            File::delete(public_path('images/' . $image->image));
        });


        $product->images()->whereNotIn('id', $request->post('old_images') ?? [])->delete();

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time() . $image->getClientOriginalName();
                $image->move(public_path('/images/'), $name);
                Image::query()->create(['image' => $name, 'product_id' => $product->id]);
            }
        }
        $product->update($request->only(['name', 'number', 'description', 'category_id']));
        return redirect()->route('product.index')->with('success ', 'تم التعديل بنجاح');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->images->each(function (Image $image) {
            if (File::exists(public_path('images/' . $image->image)))
                File::delete(public_path('images/' . $image->image));
        });
        $product->images()->delete();
        $product->delete();
        return redirect()->route('product.index')->with('success ', 'تم الحذف بنجاح');
    }
}
