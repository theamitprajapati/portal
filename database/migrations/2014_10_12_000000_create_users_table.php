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
            $table->bigIncrements('_id');
            $table->string('unique')->default(time());
            $table->string('username')->default(time());
            $table->string('password');
            $table->string('full_name');
            $table->string('mobile')->default(123456987);
            $table->string('email')->unique();
            $table->string('gender')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('statusID')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
