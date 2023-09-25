<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ProductController extends Controller
{
    public function index()
    {
        $products = Book::all();
        return response()->json(['data' => $products]);
    }
}