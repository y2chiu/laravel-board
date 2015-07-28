<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsAndCommentsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname')-> default('Noname');
            $table->string('email');
            $table->string('title');
            $table->text('post');
            $table-> integer('score') -> signed() -> default(0);
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table-> integer('post_id') -> unsigned() -> default(0);
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->string('nickname')-> default('Noname');
            $table->string('email');
            $table->string('title');
            $table->text('comment');
            $table-> integer('score') -> signed() -> default(0);
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
        Schema::drop('posts');
        Schema::drop('comments');
    }
}
