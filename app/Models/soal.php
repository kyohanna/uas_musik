<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    //codingnya di menit ke 10:11 video-2
    use HasFactory;
    protected $guarded=['id']; //penjelasan penggunaan ini juga ada di menit 10:16 video ke 2

    public function opsis(){
        return $this->hasMany(Opsi::class);
    }

    public function materi(){
        return $this->belongsTo(Materi::class);
    }

}
