<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cafe_id');
            $table->string('name');
            $table->string('sex');
            $table->string('age');
            $table->string('like');
            $table->string('cat_image');
            $table->timestamps();
            
            $table->foreign('cafe_id')->references('id')->on('cafes');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats');
    }
}
