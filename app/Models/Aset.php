<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;

    protected $table = 'aset';

    protected $fillable = [
        'foto',
        'nama_aset',
        'diskripsi',
        'nominal_aset',	
        'sumber_aset',	
        'is_deleted',	
        'tahun',	
        'kuantitas',	
        'is_confirmed',
    ];
}
