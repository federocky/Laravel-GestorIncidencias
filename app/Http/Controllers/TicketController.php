<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{

    
    public function index(){

        //$tickets = Ticket::paginate();

        $user = Auth::user();
        //dd($user);

        if($user->is_admin == 1) {

            $tickets = Ticket::all();

        } else {

            $id = Auth::id();
            $tickets = Ticket::where('user_id', $id)->get();
        }

        return view('my_tickets', ['tickets' => $tickets]);
    }


    public function create(){

        $category = Ticket::orderBy('category', 'ASC')->distinct('category')->pluck('category');
        $priority = Ticket::orderBy('priority', 'ASC')->distinct('priority')->pluck('priority');
        return view('newTicket', ['category' => $category, 'priority' => $priority]);
    }


    public function show($id){

        $ticket = Ticket::find($id);

        return view('ticket', compact('ticket'));
    }


    public function store(Request $request){

        //recibimos el id del cliente.
        $id = Auth::id();

        $request->validate([
            'title'     => 'required',
            'text'      => 'required'
        ]);

        $ticket = new Ticket();
        $ticket->title = $request->title;
        $ticket->category = $request->category;
        $ticket->priority = $request->priority;
        $ticket->message = $request->text;
        $ticket->user_id = $id;
        $ticket->status = 'open';
        $ticket->save();

        return redirect()->route('ticket.index')->with('info', 'Ticket creado correctamente');

    }
}
