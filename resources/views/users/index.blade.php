@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Listar usuarios
                
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>E-Mail</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                @can('users.show')
                                    <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-dark">Ver</a></td>
                                @endcan
                                @can('users.edit')
                                    <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-success">Editar</a></td>
                                @endcan
                                    <td>
                                @can('users.destroy')
                                        {!! Form::open(['route' => ['users.destroy', $user->id],
                                        'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar    
                                            </button>
                                        {!! Form::close() !!}
                                @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
