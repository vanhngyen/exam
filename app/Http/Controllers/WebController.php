<?php

namespace App\Http\Controllers;

use App\Athor;
use App\Author;
use App\Book;
use App\Student;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

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

    public function information(){
        return view("school.new");
    }

    public function saveInformation(Request $request){
        $request->validate([
            "student_name"=>"required",
            "student_email"=>"required",
            "phone"=>"required",
            "feedback"=>"required"
        ]);
        try {
            Student::create([
                "student_name"=>$request->get("student_name"),
                "student_email"=>$request->get("student_email"),
                "phone"=>$request->get("phone"),
                "feedback"=>$request->get("feedback")
            ]);

//            $data["message"] = "Vừa thêm 1 danh mục mới là ".$request->get("student_name");
//            notify("global","new",$data);//["message"=>"thêm thành công"]
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/home");
    }

    public function home(){
        return view("school.home");
    }

}

