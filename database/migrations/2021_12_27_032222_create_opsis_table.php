<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Untuk pilihan ganda pada pertanyaan
        //Codingan ini ada di menit 3:03 video ke-2
        Schema::create('opsis', function (Blueprint $table) {
            $table->id();
            $table->text('value');
            $table->boolean('is_correct')->default('0');
            $table->unsignedBigInteger('soal_id');
            $table->foreignId('soal_id')->references('id')->on('soals');
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
        Schema::dropIfExists('opsis');
    }
}
