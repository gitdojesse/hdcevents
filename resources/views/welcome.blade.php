@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    
<h1>Algum título</h1>
<img src="/img/banner.jpg" alt="Banner">
@if (10 > 15)        
<p>A condição é true</p>
@endif

<p>{{$nome}}</p>

@if ($nome == 'Pedro')
<p>O nome é Pedro</p>        
@elseif ($nome == 'Matheus')
<p>O nome é {{$nome}} ele tem {{$idade}} anos, e trabalha como {{$profissao}}</p>               
@else
<p>O nome não Pedro</p>
@endif

@for ($i = 0; $i < count($arr); $i++)
<p>{{ $arr[$i] }} - {{ $i }}</p>
@endfor

@foreach ($nomes as $nome)
<p>{{$loop->index}}</p>
<p>{{$nome}}</p>
@endforeach

@php
    $nome = 'João';
    echo $nome;            
@endphp
 
 @endsection