@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 col-12 mb-3">
                <img src="{{ Storage::url($event->image) }}" class="rounded w-100">
            </div>
            <div class="col-md-6 col-12 mb-3">
                <h1>{{ $event->title }}</h1>
                <h4>{{ date('d/m/Y', strtotime($event->date)) }}</h4>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li>
                        <i class="icon-24 fa-solid fa-location-dot align-middle me-2"></i>
                        <span class="align-middle">{{ $event->city }}</span>
                    </li>
                    <li>
                        <i class="icon-24 fa-solid fa-users align-middle me-2"></i>
                        <span class="align-middle">X Participantes Confirmados</span>
                    </li>
                    <li>
                        <i class="icon-24 fa-solid fa-star align-middle me-2"></i>
                        <span class="align-middle">Organizador</span>
                    </li>
                </ul>

                <ul class="list-unstyled">
                    @foreach ($event->items as $item)
                        <li>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="d-flex flex-column gap-1">
            <h3>Sobre o evento:</h3>
            <p>{{ $event->description }}</p>
        </div>
    </div>

@endsection
