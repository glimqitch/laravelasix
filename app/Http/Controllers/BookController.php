<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create(): View {
        return view('books.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'releaseYear' => 'required',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index');
    }

    public function edit(Book $book): View {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book): RedirectResponse {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'releaseYear' => 'required',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index');
    }

    public function delete(Book $book): View {
        return view('books.delete', compact('book'));
    }

    public function destroy(Book $book): RedirectResponse {
        $book->delete();
        return redirect()->route('books.index');
    }

    public function show(Book $book): View {
        return view('books.show', compact('book'));
    }
}

