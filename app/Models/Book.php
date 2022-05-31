<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    public $timestamps = false;

    public function detail(){
        return $this->hasOne(Detail::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
