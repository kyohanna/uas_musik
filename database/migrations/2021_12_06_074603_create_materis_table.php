<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->increments('materi_id');
            $table->string('kategori');
            $table->text('materi');
            $table->timestamps();

            /**
             * Kalau sesuai video
             * //Codingan ini ada di menit 1:07 video ke-2
             * $table->id();
             * $table->string('kategori_code');
             * $table->string('title');
             * $table->timestamps();
             */

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materis');
    }
}
