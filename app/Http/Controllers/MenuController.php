<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $table = $request->query('meja');
        if($table){
            Session::put('meja', $table);
        }
        $items = Item::where('is_active', 1)->orderBy('name', 'asc')->get();

        return view('customer.menu', compact('items'));
    }
}
