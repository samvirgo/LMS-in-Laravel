<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monograph extends Model
{

    public $fillable = ['name','faculty','subject','book_file_name'];

}