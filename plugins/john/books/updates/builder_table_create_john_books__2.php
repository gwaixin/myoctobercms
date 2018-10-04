<?php namespace John\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJohnBooks2 extends Migration
{
    public function up()
    {
        Schema::create('john_books_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('author');
            $table->date('publish_date');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('john_books_');
    }
}
