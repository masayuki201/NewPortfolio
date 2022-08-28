<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('follower_id')->unsigned()->comment('フォロワーのユーザーID');
            $table->bigInteger('followee_id')->unsigned()->comment('フォローされている側のユーザーID');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            //フォロワーのユーザーID外部キー制約
            $table->foreign('follower_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            //フォローされている側のユーザーID外部キー制約
            $table->foreign('followee_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('follows');
    }
}
