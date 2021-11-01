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
            $table->id();
            $table->string('username');
            $table->string('phonenumber');
            $table->string('nationality');
            $table->string('lv1');
            $table->string('lv2');
            $table->string('lv3');
            $table->integer('balance');
            $table->integer('downlines');
            $table->integer('bonus');
            $table->integer('withdrawals');
            $table->integer('bids');
            $table->integer('ads_viewed');
            $table->integer('social_links_clicked');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
