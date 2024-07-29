<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WriterController extends Controller
{
    public function index()
    {
        $writers = User::all();
        return view('writers', compact('writers'));
    }

    public function detail($id)
    {
        $writer = User::find($id);
        $articles = User::find($id)->articles;
        return view('writer_detail', compact('writer', 'articles'));
    }
}
