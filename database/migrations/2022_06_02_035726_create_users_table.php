<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Bigincrements('id')->comment('ユーザーID');
            $table->string('nickname')->unique()->comment('ニックネーム');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable()->comment('パスワード');
            $table->char('delete_flag',1)->default(0)->comment('deleteフラグ');
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
