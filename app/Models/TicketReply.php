<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketReply extends Model
{
    protected $fillable = [
        'ticket_id',
        'user_id',
        'content'
    ];

    public funtion ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public funtion user()
    {
        return $this->belongsTo(User::class);
    }
}
