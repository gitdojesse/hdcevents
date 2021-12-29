@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque o evento</h1>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar" >
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p class="subtille">Veja os enventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/storage/events/{{ $event->image }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">10/09/2020</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">x participants</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection