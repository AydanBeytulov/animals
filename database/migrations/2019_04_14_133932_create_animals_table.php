<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('animal_type');
            $table->integer('animal_breed');
            $table->integer('sex')->nullable();
            $table->text('info')->nullable();
            $table->double('price')->nullable();
            $table->date('dateBorn');
            $table->boolean('negotiable')->nullable();
            $table->boolean('free')->nullable();
            $table->boolean('passport')->nullable();
            $table->boolean('vaccines')->nullable();
            $table->boolean('genealogy')->nullable();
            $table->boolean('diseases')->nullable();
            $table->boolean('mating')->nullable();
            $table->boolean('meetings')->nullable();
            $table->integer('ad_type');
            $table->integer('user_id');
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
        Schema::dropIfExists('animals');
    }
}
