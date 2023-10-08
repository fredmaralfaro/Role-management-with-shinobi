@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center"><strong>Producto: </strong>{{ $product->name }}</h4>
                </div>
                <div class="card-body">
                    {!! Form::model($product, ['route' => ['products.update', $product->id],
                    'method' => 'PUT']) !!}
                        @include('products.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection