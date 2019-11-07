<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Book;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books/books', [
            'books' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $this->authorize('create', Book::class);
        return view('books.search');
    }
    public function create()
    {

        $this->authorize('create', Book::class);
        $query = request('query');
        // dd($query);
        $key = 'AIzaSyDOMCugilpoZ7cZ-fnEXgZlr7D3elWQFC0';
        // $client = new Client([
        //     'base_uri' => 'https://www.googleapis.com/books/v1/volumes'
        // ]);
        $client = new Client;
        $response = $client->get('https://www.googleapis.com/books/v1/volumes?q='.$query.'&key='.$key);
        // dd(json_decode($response->getBody()->getContents())->items);
        $results = json_decode($response->getBody()->getContents())->items;
        
        return view('books.create', [
            'results' => $results
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Book::class);
        Book::create(request()->validate([
            'title' => 'required'
        ]));


        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books/show', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $this->authorize('delete', $book);

        $book->delete();

        return redirect('/books');
    }
}
