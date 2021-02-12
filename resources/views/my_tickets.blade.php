@extends('layouts.app')

@section('content')
    <h1>My tickets</h1>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th scope="col">Status</th>
            <th scope="col">Last Updated</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket) 
                <tr>
                <th scope="row">{{ $ticket->category }}</th>
                <td><a href="{{ route('ticket.show', $ticket->id) }}">{{ $ticket->title }} </a></td>
                <td>{{ $ticket->status }}</td>
                <td>{{ $ticket->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $tickets->links() }} --}}
@endsection
