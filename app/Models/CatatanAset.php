<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CatatanAset extends Model
{
    use HasFactory;

    const CREATED_AT = 'waktu_input';

    protected $fillable = [
        'user_id',
        'aset_id',
        'kuantitas',
        'is_adding',
        'waktu_input',
    ];

    public $timestamps = false;
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    
    public function aset(): BelongsTo {
        return $this->belongsTo(Aset::class);
    }
}

