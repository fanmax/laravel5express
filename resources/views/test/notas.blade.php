@extends('template')

@section('title')
    Minhas Anotações
@endsection

@section('content')

<div class="container">
    <h1>Anotações</h1>

    <ul>
        @foreach($notas as $nota)
            <li>{{$nota}}</li>
        @endforeach
    </ul>
</div>

@endsection