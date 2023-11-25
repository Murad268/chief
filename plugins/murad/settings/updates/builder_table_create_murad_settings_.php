<?php namespace Murad\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradSettings extends Migration
{
    public function up()
    {
        Schema::create('murad_settings_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('copywrite')->nullable();
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_settings_');
    }
}
