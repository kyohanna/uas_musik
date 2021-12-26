<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory;
    protected $primaryKey='materi_id';
    protected $keyType='string';
    protected $table ='materis';
    protected $fillable=['kategori','materi','materi_image'];
}
