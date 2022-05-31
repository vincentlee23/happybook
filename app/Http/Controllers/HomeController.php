<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function retrieve(){
        $books = Book::paginate(10);
        return view('home', [
            'data' => $books
        ]);
    }
}
