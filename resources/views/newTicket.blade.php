@extends('layouts.app')

@section('content')

    <div class="container-md">
        
        <h1 class="mb-2">Open a new Ticket</h1>

        <form action="{{ url('/ticket/store') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input value="{{old('title')}}" type="text" class="form-control" name="title" aria-describedby="emailHelp">
              {!! $errors->first('title', '<span style="color:red">:message<span>')!!}
            </div>

            <label for="category">Category:</label>
            <select name="category" class="form-select mb-3" aria-label="Default select example">

                @foreach($category as $category)
                    <option  value="{{$category}}">{{$category}}</option>
                @endforeach

            </select>

            <label for="category">Pirority:</label>
            <select  name="priority" class="form-select" aria-label="Default select example">

                @foreach($priority as $priority)
                    <option  value="{{$priority}}">{{$priority}}</option>
                @endforeach

                {!! $errors->first('category', '<span style="color:red">:message<span>')!!}
            </select>

            <div class="mb-3">
                <label for="text" class="form-label">Text:</label>
                <textarea class="form-control" name="text" rows="3">{{old('text')}}</textarea>
                {!! $errors->first('text', '<span style="color:red">:message<span>')!!}
              </div>


            <button type="submit" class="btn btn-primary mt-3">Open Ticket</button>
          </form>
        
    </div>
    @endsection
