<?php

namespace App\Http\Controllers; 
use DB;
use App\Models\Book;
use App\Models\Isbn;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Book $book)
    {
        $booksList = $bookRepo->getAll();
        return view('books/list' , ['booksList' => $booksList]);
    }

    public function create(BookRepository $bookRepo)
    {
        $data = [
        "name" => "Panna",
        "year" => 2000,
        "publication_place" => "Warszawa",
        "pages" => 200,
        "price" => 39.99,
        ];
        
        $booksList = $bookRepo -> create($data);
        
        $isbn = new Isbn(['number' => '141412532', 'issued_by' => "Helion" , 'issued_on' => "2013-03-02"]);
        $book -> isbn() -> save($isbn);
        return redirect('books');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show(BookRepository $bookRepo, $id)
    {
        $book = $bookRepo -> find($id);
        return view('books/show',['book' => $book]);
    }

    public function edit(BookRepository $bookRepo, $id)
    {
        $data = [
            "name" => "Teletubis",
            "year" => 2002,
            "publication_place" => "Warsaw",
            "pages" => 453,
            "price" => 39.99,
        ];
        $booksList = $bookRepo -> update($data, $id);
        
         return redirect('books');
    
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(BookRepository $bookRepo, $id)
    {
        $booksList = $bookRepo->delete($id);
        return redirect('books');
    }

    public function cheapest(BookRepository $bookRepo)
    {
        $booksList = $bookRepo->cheapest();
        return view('books/list',['booksList' => $booksList]);
    }

    public function longest(BookRepository $bookRepo)
    {
        $booksList = $bookRepo->longest();
        return view('books/list',['booksList' => $booksList]);
    }

    public function search(Request $request, BookRepository $bookRepo)
    {
        $q = $request->input('q',"");
        $booksList = $bookRepo->search($q);
        return view('books/list',['booksList' => $booksList]);
    }


    
}
