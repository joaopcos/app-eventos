@extends('layouts.main')

@section('title', 'Evento')

@section('content')

    <div id="event-create-container" class="container py-5">
        <h1>Crie o seu evento</h1>
        <form action="{{ url('/events') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-2">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento:">
            </div>
            <div class="form-group">
                <label for="date">Data do Evento:</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" class="form-control-file" name="image" id="image">
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
                <label for="description">Descrição do Evento:</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="O que vai acontecer no Evento:"></textarea>
            </div>
            <div class="form-group">
                <label for="items">Adicione items de infraestrutura</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras">
                    <span>Cadeiras</span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco">
                    <span>Palco</span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja grátis">
                    <span>Cerveja grátis</span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food">
                    <span>Open Food</span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes">
                    <span>Brindes</span>
                </div>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>

@endsection
