@extends('layouts.main')
@section('title', 'Produto')
@section('content')
    @if ($id != null)        
        <h1>Exibindo Produdo id: {{ $id }}</h1>    
    @endif
@endsection