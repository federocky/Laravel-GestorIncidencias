@extends('layouts.app')

@section('content')
<div class="jumbotron px-5">
    <h1 class="display-4">Bienvenido</h1>
    <p class="lead">Bienvenido al gestor de incidencias.</p>
    <hr class="my-4">
    <p>Tiene que estar logado para gestionar incidencias</p>
    
    <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a>
    <a class="btn btn-warning btn-lg" href="{{ route('register') }}" role="button">Register</a>
  </div>
@endsection
