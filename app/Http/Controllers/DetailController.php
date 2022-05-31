<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class DetailController extends Controller
{
    public function display($id){
        $book = Book::firstWhere('id', $id);
        return view('details', [
            'data' => $book
        ]);
    }
}
