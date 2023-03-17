<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use PDF;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('admin/book/index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required',
            'descriptions' => 'required',
            'category' => 'required',
            'yearofpublication' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'cover' => 'required',
        ]);

        $book = Book::create([
            'nama' => $request->title,
            'desc' => $request->descriptions,
            'kategori' => $request->category,
            'tahunterbit' => (int)$request->yearofpublication,
            'penerbit' => $request->publisher,
            'penulis' => $request-> author,
            'cover' => file_get_contents($request->file('cover')),
        ]);

        $book->save();

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $book = Book::findOrFail($id);

        return view('show', ['title' => $book->nama,'book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.book.edit',['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'descriptions' => 'required',
            'category' => 'required',
            'yearofpublication' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'cover' => 'required',
        ]);

        $book = Book::findOrFail($id);
        $book->update([
            'nama' => $request->title,
            'desc' => $request->descriptions,
            'kategori' => $request->category,
            'tahunterbit' => (int)$request->yearofpublication,
            'penerbit' => $request->publisher,
            'penulis' => $request-> author,
            'cover' => file_get_contents($request->file('cover')),
        ]);

        $book->save();
        return redirect()->route('book.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('book.index');
    }

    public function mainpage(){
        $books = Book::all();
        return view('home',['title' => 'Home Page','books'=>$books]);
    }

    public function exportpdf(){
        $books = Book::all();

        view()->share('books', $books);
        $pdf = PDF::loadview('databook-pdf');
        return $pdf->download('data.pdf');
        // dd($data);
    }

}
