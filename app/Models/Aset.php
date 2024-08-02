<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aset extends Model
{
    use HasFactory;

    protected $table = 'aset';

    protected $fillable = [
        'foto',
        'nama_aset',
        'diskripsi',	
        'is_deleted',
        'kuantitas',	
        'bidang_id',
    ];

    public function bidang(): BelongsTo {
        return $this->belongsTo(Bidang::class);
    }
}
