<!-- resources/views/material/material_detail.blade.php -->

@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Detalhes do Material</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $material->name }}</h5>
                <p class="card-text">{{ $material->description }}</p>
                <a href="{{ route('material.edit', $material->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('material.destroy', $material->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
                <a href="{{ route('material.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
@endsection
