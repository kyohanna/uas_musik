<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Codingan ini ada di menit 3:15 video ke-2
        Schema::create('jawabans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('opsi_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('opsi_id')->references('id')->on('opsis');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('jawabans');
    }
}
