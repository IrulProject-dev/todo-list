<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'completed',
        'daily_progress_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function dailyProgres()
    {
        return $this->hasMany(daily_progres::class, 'daily_progress_id');
    }
}
