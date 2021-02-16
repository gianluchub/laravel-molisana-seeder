<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastas', function (Blueprint $table) {
            $table->id();
            $table->text('src');
            $table->text('src-h');
            $table->text('src-p');
            $table->string('titolo', 60);
            $table->string('slug', 60);
            $table->string('tipo', 20);
            $table->string('cottura', 6);
            $table->string('peso', 6);
            $table->mediumText('descrizione');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pastas');
    }
}
