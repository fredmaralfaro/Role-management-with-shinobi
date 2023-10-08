@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Producto</h4>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'products.store']) !!}
 
                        @include('products.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection