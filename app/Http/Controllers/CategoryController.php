<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input("search");
        $categories = Category::query()->when(request()->has('search'), function ($query) {
            $search = request('search');
            $query->where(function ($subquery) use ($search) {
                $subquery->where('category', 'like', '%' . $search . '%');
            });
        })->paginate(6);
        $categories->appends(['search' => $search]);
        return view("admin.category.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category'=> 'required|min:1|max:300|unique:categories,category',
            'category_description'=> 'max:3000',
        ]);
        if ($validator->fails()) {
            toastr()->error('Gagal menambahkan kategori','Gagal');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Category::create([
            'category' => $request->category,
            'category_description' => $request->category_description,
        ]);
        toastr()->success('Berhasil menambahkan kategori','Berhasil');
        return to_route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'category'=> 'required|min:1|max:300|unique:categories,category,'.$id,
            'category_description'=> 'max:3000',
        ]);
        if ($validator->fails()) {
            toastr()->error('Gagal mengubah kategori','Gagal');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $category->update([
            'category' => $request->category,
            'category_description' => $request->category_description,
        ]);
        toastr()->success('Berhasil mengubah kategori','Berhasil');
        return to_route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        try {
            $category->delete();
        } catch (QueryException $e) {
            if ($e) {
                toastr()->error('Kategori sedang digunakan','Gagal Menghapus Kategori');
            } else {
                toastr()->success('Berhasil menghapus kategori','Berhasil');
            }
        }
        return to_route('category.index');
    }
}
