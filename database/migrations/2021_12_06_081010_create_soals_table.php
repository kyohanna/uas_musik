<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
          /**
           * Punya Dafa
            *$table->increments('soal_id');
            *$table->string('soal');
            *$table->string('materi_id');
            *$table->foreign('materi_id')->references('id')->on('materis');
            *$table->primary('soal_id');
            *$table->timestamps();
            */

            //Codingan ini ada di menit 2:10 video ke-2
            //klo sesuai video
            $table->id();
            $table->text('value');
             $table->unsignedBigInteger('materi_id');
             $table->foreign('materi_id')->references('id')->on('materis');
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
        Schema::dropIfExists('soals');
    }
}
