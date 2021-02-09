<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function getTickets(){
        return view('my_tickets');
    }

    public function makeTicket(){
        return view('newTicket');
    }
}
