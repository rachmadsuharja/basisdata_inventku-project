<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $items = Item::query()->when(request()->has('search'), function ($query) {
            $search = request('search');
            $query->where(function ($subquery) use ($search) {
                $subquery->where('code', 'like', '%' . $search . '%')
                ->orWhere('name','like', '%' . $search . '%');
            });
        })->paginate(20);
        $items->appends(['search' => $search]);
        return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.items.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|min:5|unique:items,code',
            'name'=> 'required|min:1|max:300',
            'category_id'=> 'required',
            'unit' => 'required',
            'stock' => 'required|numeric|gt:0',
            'price' => 'required|numeric|gt:0',
            'image' => 'required|mimes:png,jpg,jpeg,heic',
            'item_description' => 'max:3000',
        ]);
        if ($validator->fails()) {
            toastr()->error('Gagal menambahkan barang','Gagal');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('public/items/'.$imageName);
        Item::create([
            'code'=> $request->code,
            'name'=> $request->name,
            'category_id'=> $request->category_id,
            'unit'=> $request->unit,
            'stock'=> $request->stock,
            'price'=> $request->price,
            'image'=> $imageName,
            'item_description'=> $request->item_description
        ]);
        toastr()->success('Berhasil menambahkan barang', 'Berhasil');
        return to_route('items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Item::findOrFail($id);
        $categories = Category::all();
        return view('admin.items.edit', compact('item','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Item::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'code' => 'required|min:5|unique:items,code,'.$item->id,
            'name'=> 'required|min:1|max:300',
            'category_id'=> 'required',
            'unit' => 'required',
            'stock' => 'required|numeric|gt:0',
            'price' => 'required|numeric|gt:0',
            'image' => 'mimes:png,jpg,jpeg,heic',
            'item_description' => 'max:3000',
        ]);
        if ($validator->fails()) {
            toastr()->error('Gagal mengubah barang', 'Gagal');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $image = $request->file('image');
        if ($request->hasFile('image') && $image->isValid()) {
            $imageName = $image->hashName();
            Storage::delete('public/items/'.$item->image);
            $image->storeAs('public/items/'.$imageName);
        } else {
            $imageName = $item->image;
        }
        $item->update([
            'code'=> $request->code,
            'name'=> $request->name,
            'category_id'=> $request->category_id,
            'unit'=> $request->unit,
            'stock'=> $request->stock,
            'price'=> $request->price,
            'image'=> $imageName,
            'item_description'=> $request->item_description
        ]);
        toastr()->success('Berhasil mengubah barang', 'Berhasil');
        return to_route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        Storage::delete('public/items/'.$item->image);
        $item->delete();
        toastr()->success('Berhasil menghapus barang','Berhasil');
        return to_route('items.index');
    }
}
