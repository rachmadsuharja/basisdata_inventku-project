<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function requestItem(Request $request) {
        $categories = Category::all();
        $items = Item::all();
        return view("client.request", compact("categories", "items"));
    }

    public function storeRequest(Request $request) {

    }

}
