<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan_Cuti extends Model
{
    
    protected $fillable = [
        'jenis_cuti','alasan_cuti','awal_cuti','akhir_cuti'
    ];

   
}


