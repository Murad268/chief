<?php

namespace Murad\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradSettings extends Migration
{
    public function up()
    {
        Schema::table('murad_settings_', function ($table) {
            $table->text('copywrite')->nullable()->change();
        });

        // Добавьте код для создания таблицы переводов
        Schema::create('murad_settings_translations', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('murad_settings_id')->unsigned(); // ссылка на основную таблицу
            $table->text('copywrite')->nullable();
            $table->string('locale')->index();
            $table->unique(['murad_settings_id', 'locale']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('murad_settings_');
    }
}
