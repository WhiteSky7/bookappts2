<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Resources\Book as BookResource;
use App\Http\Resources\BookCollection;

class BookController extends Controller
{
    public function index()
    {
        return new BookCollection(Book::all());
    }
    public function show($id)
    {
        return new BookResource(Book::findOrFail($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'lib_id' => 'required|max: 100'
        ]);
        $book = Book::create($request->all());

        return (new BookResource($book))
                ->response()
                ->setStatusCode(201);
    }
    public function update($id, Request $request)
    {

        $request->validate([
                'name' => 'required|max:255',
                'lib_id' => 'required|max: 100'
            ]);

            

        return (new BookResource($book));

    }
    public function delete($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json(null, 204);
    }
    public function resetAnswers($id)
    {
        $book = Book::findOrFail($id);
        $book->answers = 0;
        $book->points = 0;

        return new BookResource($book);
    }
}
