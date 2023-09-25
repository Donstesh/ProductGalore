<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Book::all();
        return response()->json(['data' => $products]);
    }
}
