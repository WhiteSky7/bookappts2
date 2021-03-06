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
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'lib_id' => 'required|max: 100'
            ]);

            $book = Book::find($id);
            $book->lib_id = $request->get('lib_id');
            $book->name = $request->get('name');
            $book->save();

        return (new BookResource($book))
        ->response()
        ->setStatusCode(202);
    }
    public function delete($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json(null, 204);
    }

}
