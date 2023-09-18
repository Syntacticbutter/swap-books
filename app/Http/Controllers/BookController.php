<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        // dd($request->author);
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'edition' => 'required|numeric',
            'year' => 'required|numeric',
            'price' => 'required|decimal:2',
            'quantity' => 'required|numeric',
            'status' => 'required'
        ]);

        $newBook = Book::create($data);

        return redirect(route('book.index'));
    }
}