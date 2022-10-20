<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('post_id');
            $table->text('content');
            $table->tinyInteger('status')->default(0)->comment('0:待审核，1审核通过');
            $table->integer('from_uid')->comment('评论的用户id');
            $table->string('from_username')->comment('评论的用户姓名');
            $table->integer('to_uid')->default(0)->comment('被评论的用户id');
            $table->string('to_username')->default('')->comment('被评论的用户姓名');
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
        Schema::dropIfExists('comments');
    }
}
