@extends('Layout')

@section('content')
    <h1 class="mt-1">{{ $title }}</h1>
    @if (empty($users))
        <p>No hay usuarios registrados</p>
    @else
        <ul class="list-group mt-4">
            @foreach ($users as $user)
                <li class="list-group-item">
                    <p>{{ $user->name }}, ({{ $user->email }})</p>
                    <a href="{{ route('users.detail', ['user' => $user]) }}">Ver detalles</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection