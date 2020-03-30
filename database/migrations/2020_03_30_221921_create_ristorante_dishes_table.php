<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRistoranteDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ristorante_dishes', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->text('description');
            $table->string('ingredients');
            $table->bigInteger('diet_id')->unsigned();
            $table->foreign('diet_id')->references('id')->on('diets');
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
        Schema::dropIfExists('ristorante_dishes');
    }
}
