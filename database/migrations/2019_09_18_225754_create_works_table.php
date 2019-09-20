<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            
            //作品投稿用
            $table->integer('worksFukusendo');
            $table->integer('worksKind');
            $table->integer('worksCategory');
            $table->integer('worksMunakuso');
            $table->string('worksComment');
            $table->string('itemName');
            $table->string('imageUrl');
            $table->string('itemUrl');
            
            //タイムスタンプ
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
