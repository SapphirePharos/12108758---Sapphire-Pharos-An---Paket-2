<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.product');
    }

    public function create()
    {
        return view('Admin.create');
    }

    public function store(Request $request, $store)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'stock'=>'required',
            'image'=>'required',
        ]);

        $store->Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $request->image,
        ]);

    }
}
