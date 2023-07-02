<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function books()
    {
        $books = Book::all();
        // return view('books',['books'=>$books]);
        return view('books',compact('books'));
    }
    public function detail(Book $book)
    {
        return view('detail', compact('book'));
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->description = $request->description;
        $path = Storage::putFile("public", $request->file('file'));
        $book->path=$path;
    

        $book->save();

        return redirect("/books");
    }

    public function compareForm(Request $request)
    {
        $books = Book::all();
        // return view("compareForm",['books' => $books]);
        return view("compareForm",['books' => $books,"respanse"=>""]);
    }

  
  
    public function compare(Request $request)
    {
       $first=Book::find($request->first);
       $second=Book::find($request->second);
       if($first->price < $second->price) {
            $compare="less than";
       
       } else {
            $compare="more than";
       }
       $respanse=$first->title . " " . $compare . " " . $second->title;
       $books = Book::all();
       return view("compareForm",['books' => $books,"respanse"=>$respanse]);
       

       
    }
   
 }


