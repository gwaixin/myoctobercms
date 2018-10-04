<?php namespace John\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJohnBooksDetail extends Migration
{
    public function up()
    {
        Schema::rename('john_books_', 'john_books_detail');
        Schema::table('john_books_detail', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('john_books_detail', 'john_books_');
        Schema::table('john_books_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
