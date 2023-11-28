<?php namespace Murad\Translate\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradTranslate extends Migration
{
    public function up()
    {
        Schema::create('murad_translate_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_translate_');
    }
}
