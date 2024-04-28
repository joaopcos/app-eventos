@extends('layouts.main')

@section('title', 'Evento')

@section('content')

    <div id="event-create-coniner" class="container">
        <h1>Crie o seu evento</h1>
        <form action="{{ url('/events') }}" method="POST" class="d-flex flex-column gap-2">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento:">
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do Evento:">
            </div>
            <div class="form-group">
                <label for="private">Evento Privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Evento:</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="O que vai acontecer no Evento:"></textarea>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>

@endsection
