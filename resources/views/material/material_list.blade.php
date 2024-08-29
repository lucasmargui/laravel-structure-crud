<!-- resources/views/material/material_list.blade.php -->

@extends('layouts.main')

@section('content')

<style>

h2 {
   font-family: 'Times New Roman', Times, serif;
   color: #444;; 
   text-align: center;
   margin-top: 30px;
   margin-bottom: 20px;
   font-size: 4em;
         
   } 
   
   
.center-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}
   
</style>

<div class="center-content">

    <h2>Material</h2>
    <a href="{{ route('material.create') }}" class="btn btn-success">Novo Material</a>
    <table class="table table-striped table-hover" id="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Espessura</th>
                <th>Largura</th>
                <th>Altura</th>
                <th>Cor</th>
                <th>Fabricante</th>
                <th>Código Fabricante</th>
                <th>Preço</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse($materials as $material)
            <tr>
                <td>{{ $material->name }}</td>
                <td>{{ $material->type }}</td>
                <td>{{ $material->description }}</td>
                <td>{{ $material->thickness }}</td>
                <td>{{ $material->width }}</td>
                <td>{{ $material->height }}</td>
                <td>{{ $material->color }}</td>
                <td>{{ $material->manufacturer }}</td>
                <td>{{ $material->manufacturer_code }}</td>
                <td>{{ $material->price }}</td>
                <td>                 
                    <div class="btn-group btn-group-row" role="group">
                        <a href="{{ route('material.show', $material->id) }}" class="btn btn-sm btn-outline-primary">View</a>
                        <a href="{{ route('material.edit', $material->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
                        <form action="{{ route('material.destroy', $material->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="11">Nenhum material encontrado.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>


@endsection
