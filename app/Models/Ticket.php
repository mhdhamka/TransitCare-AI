<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'user_id',
        'code',
        'title',
        'description',
        'status',
        'priority',
        'completed_at'
    ];

    public funtion user()
    {
        return $this->belongsTo(User::class);
    }

    public funtion ticketReplies()
    {
        return $this->hasMany(TicketReply::class);
    }
}
