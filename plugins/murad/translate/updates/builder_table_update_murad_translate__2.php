<?php namespace Murad\Translate\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradTranslate2 extends Migration
{
    public function up()
    {
        Schema::table('murad_translate_', function($table)
        {
            $table->string('key');
        });
    }
    
    public function down()
    {
        Schema::table('murad_translate_', function($table)
        {
            $table->dropColumn('key');
        });
    }
}
