<!-- resources/views/order/order_list.blade.php -->

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

    <h2>Order</h2>
    <a href="{{ route('order.create') }}" class="btn btn-success">Novo order</a>
    <table class="table table-striped table-hover" id="table">
        <thead>
            <tr>
                <th>Material</th>
                <th>Quantity</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
            <tr>
                <td>{{ $order->material->name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>                 
                    <div class="btn-group btn-group-row" role="group">
                        <a href="{{ route('order.show', $order->id) }}" class="btn btn-sm btn-outline-primary">View</a>
                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
                        <form action="{{ route('order.destroy', $order->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="11">Nenhum order encontrado.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>


@endsection
