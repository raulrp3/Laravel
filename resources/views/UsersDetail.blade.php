@extends('Layout')

@section('content')
    <h1>Usuario #{{ $user->id }}</h1>

    <div class="mt-4">
        <p>Nombre: {{ $user->name }}</p>
        <p>Correo electrónico: {{ $user->email }}</p>
        <a href="{{ route('users') }}">Regresar al listado de usuarios</a>
    </div>
@endsection