<?php

namespace App\Ticket;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Ticket extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'type'];
}
