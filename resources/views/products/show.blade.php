@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card text-center">
                <div class="card-header">
                    <h4><strong>Producto: </strong>{{ $product->name }}</h4>
                </div>
                <div class="card-body">
                <p><strong>Descripción: </strong>{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection