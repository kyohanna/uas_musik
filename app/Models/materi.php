<?php

namespace App\Models;
use App\Models\Jawaban;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory;
    protected $primaryKey='materi_id';
    protected $keyType='string';
    protected $table ='materis';
    protected $fillable=['kategori','materi','materi_image']; //divideo pake, protected $guarded=['id];


    //codingan di menit ke 14:37 DAN di menit 28:10 video ke 2 
    public function soal(){
        return $this->hasMany(Soal::class);
    }


}
