<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class CategoryController extends Controller
{
    public function showCategory($id){
        $list = Book::where('category_id', $id)->get();
        $category = Category::firstWhere('id', $id);
        if($list == NULL){
            return view('category', [
                'data' => 'No Data Available',
                'category' => $category
            ]);
        }else{
            return view('category', [
                'data' => $list,
                'category' => $category
            ]);
        }
    }
}
