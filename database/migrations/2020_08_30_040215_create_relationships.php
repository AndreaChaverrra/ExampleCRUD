<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;


class CreateRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function( Blueprint $table){
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
        });

        Schema::table('movies', function( Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');

        });

        Schema::table('categories', function( Blueprint $table){
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');

        });

        Schema::table('category_movie', function( Blueprint $table){
            $table->foreign('movie_id')->references('id')->on('movies')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relationships');
    }
}
