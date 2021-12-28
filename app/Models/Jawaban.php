<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    //codingnya di menit ke 12:10 video-2
    public function opsi(){
        return $this->belongsTo(Opsi::class);
    }

    // public function materi(){
    //     return $this->belongsTo(Materi::class);
    // }
    
}
