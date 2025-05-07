<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daily_progres extends Model
{
    /** @use HasFactory<\Database\Factories\DailyProgresFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'date',
        'total_task',
        'total_completed',
        'percentage',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
