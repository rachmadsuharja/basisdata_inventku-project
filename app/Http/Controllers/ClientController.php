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
        return view("client.request", compact("categories", "items"));
    }

    public function getItems() {
        $item = Item::all();
        return response()->json(['item' => $item]);
    }

    public function storeRequest(Request $request) {

    }

}