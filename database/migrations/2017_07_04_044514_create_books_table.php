<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('name');
            $table->string('author');
            $table->string('copyright');
            $table->string('book_no');
            $table->string('isbn');
            $table->string('shelf_no');
            $table->string('book_file_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop("books");
    }
}
