<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('body');
//            $table->integer('article_id');
//            $table->integer('article_id');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
//
//        Schema::table('comments', function (Blueprint $table) {
//            $table->unsignedBigInteger('article_id');
//
//            $table->foreign('article_id')->references('id')->on('articles');
//        });
//
//        Schema::table('users', function (Blueprint $table) {
//            $table->unsignedBigInteger('user_id');
//
//            $table->foreign('user_id')->references('id')->on('users');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
