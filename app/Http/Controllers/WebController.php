<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function listbook(){

        return view("book.list");
    }
}
