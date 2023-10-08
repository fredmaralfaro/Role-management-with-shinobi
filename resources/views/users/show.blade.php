@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card">         
                <div class="card-header">
                    <h3>Usuario</h3>
                </div>    
                <div class="card-body">
                    <p><strong>ID: </strong>{{ $user->id }}</p>
                    <p><strong>Usuario: </strong>{{ $user->name }}</p>
                    <p><strong>Correo: </strong>{{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection