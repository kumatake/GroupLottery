<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('group_id');
            $table->boolean('fixed');
            $table->boolean('default_join');
            $table->boolean('default_view');
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
        Schema::dropIfExists('lottery_users');
    }
}
