<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function requestItem(Request $request) {
        $categories = Category::all();
        $items = Item::all();
        $carts = Cart::paginate(4);
        return view("client.request", compact("categories", "items", "carts"));
    }

    public function getItems() {
        $item = Item::all();
        return response()->json(['item' => $item]);
    }

    public function storeRequest(Request $request) {

    }

}
