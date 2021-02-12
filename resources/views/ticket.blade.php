@extends('layouts.app')

@section('content')
    
    <div class="container-md">

        
        <ul class="list-group ">
            <li class="list-group-item"><h1>Ticket details</h1></li>
            <li class="list-group-item">Titulo: {{ $ticket->title }}</li>
            <li class="list-group-item">Category: {{ $ticket->category }}</li>
            <li class="list-group-item">Status: {{ $ticket->status }}</li>
            <li class="list-group-item">Created on: {{ $ticket->created_at }}</li>
        </ul>
        <a class="btn btn-primary mt-2" href="{{route('ticket.index')}}" >Volver</a>
        
    </div>


@endsection
