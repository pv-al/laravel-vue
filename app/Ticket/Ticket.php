<?php

namespace App\Ticket;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Ticket extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'type'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function type()
    {
        return $this->belongsTo('App\TicketType');
    }

    public function status()
    {
        return $this->belongsTo('App\TicketStatus');
    }
}
