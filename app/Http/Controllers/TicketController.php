<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //TODO: llamarle index
    public function getTickets(){

        $tickets = Ticket::paginate();

        return view('my_tickets', ['tickets' => $tickets]);
    }

    //TODO: llamarle create
    public function makeTicket(){
        return view('newTicket');
    }


    public function show($id){

        $ticket = Ticket::find($id);

        return view('ticket', compact('ticket'));
    }
}
