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

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'stock'=>'required',
            'image'=>'required',
        ]);

        $store->Products::create([
            'name' => $request->name,
            'price' => $request->price,
            'description'=> $request->description,
            'stock' => $request->stock,
            'image' => $request->image,
        ]);

    }
}
