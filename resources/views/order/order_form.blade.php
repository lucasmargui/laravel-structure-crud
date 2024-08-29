<!-- resources/views/order/order_form.blade.php -->

@extends('layouts.main')

@section('content')
<form action="{{ isset($order) ? route('order.update', $order->id) : route('order.store') }}" method="POST">
    @csrf
    @if(isset($order))
            @method('PUT') <!-- Usado para atualizar o recurso -->
    @endif
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block" style="background-image: url('https://fastly.picsum.photos/id/307/5000/3333.jpg?hmac=wQFGsFoqFNhjL7Vf3y12D-qiKGUAl-BuhTbFJthHH4I'); background-repeat: repeat; background-size: contain; border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;">
                                <img src="https://fastly.picsum.photos/id/307/5000/3333.jpg?hmac=wQFGsFoqFNhjL7Vf3y12D-qiKGUAl-BuhTbFJthHH4I"
                                     alt="Sample photo" class="img-fluid"
                                     style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; width: 100%; height: auto;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Order Form</h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="name" class="form-label">Material</label>
                                            <select name="material_id" id="material_id" class="form-control form-control-lg" required>
                                                <option value="">Select a material</option>
                                                @foreach($materials as $material)
                                                    <option value="{{ $material->id }}" {{ isset($order) ? $material->id == old('material_id', $order->material_id) ? 'selected' : '' : ''}} >
                                                        {{ $material->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="type" class="form-label">Quantity</label>
                                            <input type="text" id="quantity" name="quantity" class="form-control form-control-lg" value="{{ old('quantity', isset($order) ? $order->quantity : '') }}" required>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="submit" class="btn btn-primary">{{ isset($order) ? 'Update' : 'Create' }}</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

@endsection
