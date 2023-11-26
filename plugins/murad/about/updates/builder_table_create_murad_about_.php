<?php namespace Murad\About\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradAbout extends Migration
{
    public function up()
    {
        Schema::create('murad_about_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->text('desc')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_about_');
    }
}
