<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return to_route("request-items");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = Item::findOrFail($request->item);
        $validator = Validator::make($request->all(), [
            "item" => "required",
            "item_amount" => "required|numeric|gt:0|lte:".$item->stock,
        ],[
            "item.required"=> "Barang tidak boleh kosong",
            "item_amount.required"=> "Jumlah tidak boleh kosong",
            "item_amount.numeric"=> "Jumlah tidak valid",
            "item_amount.gt"=> "Jumlah tidak valid",
            "item_amount.lte" => "Jumlah terlalu banyak dari stok yang disediakan",
        ]);

        // $cart = Cart::all();
        // if ($cart->contains) {
        //     return to_route("cart.update")->with($cart)->withInput($request->except('_token'));
        // };

        if ($validator->fails()) {
            toastr()->error('Gagal menambahkan barang', 'Gagal');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Cart::create([
            'item_code' => $item->code,
            'item' => $item->name,
            'item_amount' => $request->item_amount,
        ]);

        toastr()->success('Dimasukkan ke keranjang', 'Berhasil');
        return to_route('request-items');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Cart::findOrFail($id);
        $item->delete();
        toastr()->success('Berhasil menghapus item','Berhasil');
        return to_route('request-items');
    }
}
