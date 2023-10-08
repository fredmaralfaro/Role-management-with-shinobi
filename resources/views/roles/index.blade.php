@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Listar Roles
                    @can('roles.create')
                    <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $rol)
                                <tr>
                                <td>{{ $rol->id }}</td>
                                <td>{{ $rol->name }}</td>
                                @can('roles.show')
                                    <td><a href="{{ route('roles.show', $rol->id) }}" class="btn btn-sm btn-dark">Ver</a></td>
                                @endcan
                                @can('roles.edit')
                                    <td><a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-sm btn-success">Editar</a></td>
                                @endcan
                                    <td>
                                @can('roles.destroy')
                                        {!! Form::open(['route' => ['roles.destroy', $rol->id],
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
                    {{ $roles->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
