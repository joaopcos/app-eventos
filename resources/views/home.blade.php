@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <div class="container">
        <p class="fs-4 mb-4">Confira os eventos dos próximos dias:</p>

        {{-- Events Loop --}}
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($events as $event)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/event_placeholder.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text">{{ $event->description }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Ver evento</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
