<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('contact', ['categories' => $categories]);
    }

    public function filter($cat_id)
    {
        $books = Book::where('category_id', $cat_id)->orderBy('title', 'asc')->paginate($perPage = 12);
        $categories = Category::all();
        $name = Category::where('id', $cat_id)->first()->category;
        return view('category', ['categories' => $categories, 'books' => $books, 'name' => $name]);
    }
}
