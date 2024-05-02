@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="py-5 border-bottom">
        <div class="container d-flex flex-column align-items-center gap-3">
            <h1>Busque pelo seu evento:</h1>
            <form action="/" method="GET" class="w-100">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar por evento...">
            </form>
        </div>
    </div>
    <div class="container py-5">
        @if (count($events) == 0 && $search)
            <p class="fs-4 text-center">Nenhum evento disponível de acordo com: {{ $search }}</p>
            <a href="{{ url('/') }}" class="d-block text-center">Ver todos os eventos.</a>
        @elseif(count($events) == 0)
            <p class="fs-4 text-center">Nenhum evento disponível.</p>
        @else
            @if ($search)
                <p class="fs-4 mb-4">Buscando eventos por: {{ $search }}</p>
            @else
                <p class="fs-4 mb-4">Confira os eventos dos próximos dias:</p>
            @endif

            {{-- Events Loop --}}
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($events as $event)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ Storage::url($event->image) }}" class="card-img-top event">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p><i class="fa-regular fa-calendar me-1"></i> {{ date('d/m/Y', strtotime($event->date)) }}</p>
                                <p class="card-text event-description">{{ $event->description }}</p>
                            </div>
                            <div class="card-footer">
                                <a href="/events/{{ $event->id }}" class="btn btn-primary">Ver evento <i class="fa-solid fa-eye ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
