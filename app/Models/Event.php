<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'user_id',
        'source',
        'external_id',
        'title',
        'description',
        'location',
        'start_time',
        'end_time',
        'notification_phone',
        'reminder_minutes',
        'status',
        'reminder_sent_at',
        'completed_at'
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'reminder_sent_at' => 'datetime',
        'completed_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
