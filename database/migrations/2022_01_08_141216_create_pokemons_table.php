<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->string('name', 30)->comment('名前');
            $table->unsignedInteger('no')->unique()->comment('図鑑No.');
            $table->string('category', 30)->comment('分類');
            $table->unsignedDecimal('height', 4, 1)->comment('高さ');
            $table->unsignedDecimal('weight', 4, 1)->comment('重さ');
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
        Schema::dropIfExists('pokemons');
    }
}
