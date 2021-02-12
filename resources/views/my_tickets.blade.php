@extends('layouts.app')

@section('content')
    <h1>My tickets</h1>

    @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif

    @if (session('info'))
      <div class="alert alert-success">
          {{ session('info') }}
      </div>
    @endif

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th scope="col">Status</th>
            <th scope="col">Last Updated</th>

            @if($is_admin)
            <th scope="col">Actions</th>
            @endif

          </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket) 
                <tr>
                <th scope="row">{{ $ticket->category }}</th>
                <td><a href="{{ route('ticket.show', $ticket->id) }}">{{ $ticket->title }} </a></td>
                <td>{{ $ticket->status }}</td>
                <td>{{ $ticket->updated_at }}</td>

                @if($is_admin && $ticket->status == 'open')
                  <td scope="col"><a href="{{ route('ticket.update', [ 'id' => $ticket->id, 'status' => $ticket->status]) }}" class="btn btn-danger">Close</a> </td>
                @endif
                @if($is_admin && $ticket->status == 'closed')
                  <td scope="col"><a href="{{ route('ticket.update', [ 'id' => $ticket->id, 'status' => $ticket->status]) }}" class="btn btn-success">Open</a> </td>
                @endif

                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $tickets->links() }} --}}
@endsection
