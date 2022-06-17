<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribed', function (Blueprint $table) {
            $table->string('user_email');
            $table->foreign('user_email')->references('email')->on('users')->onDelete('cascade');
            $table->string('ISBN');
            $table->foreign('ISBN')->references('ISBN')->on('books')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['user_email','ISBN']);
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
        Schema::dropIfExists('subscribed');
    }
};
