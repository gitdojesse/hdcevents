@extends('layouts.main')
@section('title', 'Produto')
@section('content')
    @if (isset($busca))        
        <h1>O usuário está buscando por: {{ $busca }}</h1>    
    @endif
@endsection