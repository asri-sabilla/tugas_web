<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::all(); // ambil semua
        return view('carts.index', compact('carts'));
    }

    public function create()
{
    return view('carts.create');
}

    public function store(Request $request)
    {
        Cart::create($request->all());
        return redirect()->route('carts.index');
    }

    public function destroy($id)
    {
        Cart::findOrFail($id)->delete();
        return redirect()->route('carts.index');
    }
}
