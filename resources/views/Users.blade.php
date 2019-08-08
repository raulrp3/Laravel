@extends('Layout')

@section('content')
    <h1>{{ $title }}</h1>
    @if (empty($users))
        <p>No hay usuarios registrados</p>
    @else
        <ul class="list-group mt-2">
            @foreach ($users as $user)
                <li class="list-group-item">{{ $user }}</li>
            @endforeach
        </ul>
    @endif
@endsection