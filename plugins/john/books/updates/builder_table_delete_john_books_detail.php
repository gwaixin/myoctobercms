<?php namespace John\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteJohnBooksDetail extends Migration
{
    public function up()
    {
        Schema::dropIfExists('john_books_detail');
    }
    
    public function down()
    {
        Schema::create('john_books_detail', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('page');
            $table->text('description');
            $table->text('summary');
            $table->string('author', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
