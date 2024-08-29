<!-- resources/views/order/order_detail.blade.php -->

@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Detalhes do Order</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $order->material_id }}</h5>
                <p class="card-text">{{ $order->quantity }}</p>
                <a href="{{ route('order.edit', $order->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('order.destroy', $order->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
                <a href="{{ route('order.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
@endsection
