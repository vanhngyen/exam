<?php

namespace App\Http\Controllers;

use App\Athor;
use App\Author;
use App\Book;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function listbook(){
        $books = Book::all();
        $authors = Author::all();
        return view("book.list", [
            "books" => $books,
            "authors" => $authors
        ]);
    }

    public function searchbook(Request $request){
        $book = Book::where("title", $request->bookname)->get();
        return view("book.find", [
            "book"=>$book,
        ]);
    }



}

