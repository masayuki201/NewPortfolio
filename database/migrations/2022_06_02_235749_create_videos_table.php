<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id')->comment('動画ID');
            $table->integer('user_id')->unsigned()->index()->comment('ユーザーID');
            $table->string('url', 11)->comment('URL');
            $table->integer('target_id')->unsigned()->comment('対象ID');
            $table->timestamps();

            //ユーザーID外部キー制約
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            //対象IDの外部キー制約
            $table->foreign('target_id')
            ->references('id')
            ->on('targets')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
