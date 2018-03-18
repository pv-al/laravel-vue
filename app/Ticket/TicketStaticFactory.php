<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 12.03.2018
 * Time: 0:26
 */

namespace App\Ticket;

use App\Ticket\Ticket;
use App\Ticket\BugTicket;
use App\Ticket\FeatureTicket;
use Illuminate\Http\Request;

class TicketStaticFactory
{
    public static function factory(Request $request): Ticket
    {
        if ($request->type == 'bug') {
            $bugTicket = BugTicket::create($request->all());
            return $bugTicket;
        }

        if ($request->type == 'feature') {
            $featureTicket = FeatureTicket::create($request->all());
            return $featureTicket;
        }

        throw new \InvalidArgumentException('Unknown type given');
    }
}