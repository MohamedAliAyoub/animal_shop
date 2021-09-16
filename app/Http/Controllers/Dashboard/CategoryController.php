<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $items = Category::query()->paginate(30);
        return view('dashboard.categories.index', compact('items'));
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
        ]);

        Category::create([
            'name' => $request->name,

        ]);
        return redirect()->route('category.index')->with(['success ', 'تم الاضافة بنجاح']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request)
    {
        $user = Category::query()->findOrFail($id);
        $request->validate([
            'name' => 'required|string',
        ]);



            $user->update([
                'name' => $request->name,

            ]);

        return redirect()->route('category.index')->with('success ', 'تم التعديل بنجاح');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category.index')->with('success ', 'تم الحذف بنجاح');
    }
}
