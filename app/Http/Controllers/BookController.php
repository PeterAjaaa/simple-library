<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'page_count' => 'required',
            'author_name' => 'required',
            'author_email' => 'required',
        ]);
        Book::create($request->all());
        return redirect()->route('add');
    }

    public function add()
    {
        return view('add');
    }
}
