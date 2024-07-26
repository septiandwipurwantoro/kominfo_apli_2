<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Aktivitas;
use App\Models\Aset;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Log extends Model
{
    use HasFactory;

    const CREATED_AT = 'waktu_input';
    
    protected $fillable = [
        'waktu_input',
        'aset_id',
        'user_id',
        'aktivitas_id'
    ];
    
    public $timestamps = false;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    
    public function aset(): BelongsTo {
        return $this->belongsTo(Aset::class);
    }
    
    public function aktivitas(): BelongsTo {
        return $this->belongsTo(Aktivitas::class);
    }
}
