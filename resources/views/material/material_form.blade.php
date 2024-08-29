<!-- resources/views/material/material_form.blade.php -->

@extends('layouts.main')

@section('content')
<form action="{{ isset($material) ? route('material.update', $material->id) : route('material.store') }}" method="POST">
    @csrf
    @if(isset($material))
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
                                    <h3 class="mb-5 text-uppercase">Material Form</h3>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" id="name" name="name" class="form-control form-control-lg" value="{{ old('name', isset($material) ? $material->name : '') }}" required>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="type" class="form-label">Type</label>
                                            <input type="text" id="type" name="type" class="form-control form-control-lg" value="{{ old('type', isset($material) ? $material->type : '') }}" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="description" class="form-label">Description</label>
                                            <input type="text" id="description" name="description" class="form-control form-control-lg" value="{{ old('description', isset($material) ? $material->description : '') }}">
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="thickness" class="form-label">Thickness</label>
                                            <input type="number" id="thickness" name="thickness" class="form-control form-control-lg" value="{{ old('thickness', isset($material) ? $material->thickness : '') }}" step="any">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="width" class="form-label">Width</label>
                                            <input type="number" id="width" name="width" class="form-control form-control-lg" value="{{ old('width', isset($material) ? $material->width : '') }}" step="any">
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="height" class="form-label">Height</label>
                                            <input type="number" id="height" name="height" class="form-control form-control-lg" value="{{ old('height', isset($material) ? $material->height : '') }}" step="any">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="color" class="form-label">Color</label>
                                            <input type="text" id="color" name="color" class="form-control form-control-lg" value="{{ old('color', isset($material) ? $material->color : '') }}">
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="manufacturer" class="form-label">Manufacturer</label>
                                            <input type="text" id="manufacturer" name="manufacturer" class="form-control form-control-lg" value="{{ old('manufacturer', isset($material) ? $material->manufacturer : '') }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="manufacturer_code" class="form-label">Manufacturer Code</label>
                                            <input type="text" id="manufacturer_code" name="manufacturer_code" class="form-control form-control-lg" value="{{ old('manufacturer_code', isset($material) ? $material->manufacturer_code : '') }}">
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="number" id="price" name="price" class="form-control form-control-lg" value="{{ old('price', isset($material) ? $material->price : '') }}" step="any">
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="submit" class="btn btn-primary">{{ isset($material) ? 'Update' : 'Create' }}</button>
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
