<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opsi extends Model
{
    use HasFactory;

    //codingnya di menit ke 11:50 video-2
    public function soal(){
        return $this->belongsTo(Soal::class);
    }

    public function jawaban(){
        return $this->hasOne(Jawaban::class);
    }
}
