<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    public $fillable = ['category','name','author','copyright','book_no','isbn','shelf_no','book_file_name'];

}