<?php

namespace App\Ticket;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Ticket\Ticket;

class FeatureTicket extends Ticket
{
    protected $table = 'tickets';

    protected $type = 'feature';

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(function ($query) {
            $query->where('type', 'feature');
        });
    }
}
