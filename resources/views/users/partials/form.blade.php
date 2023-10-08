
<div class="form-group">
    {{ Form::label('name', 'Nombre del usuario') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<hr>
<h3>Lista de roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($roles as $rol)
            <li>
                <label>
                    {{ Form::checkbox('roles[]', $rol->id, null)}}
                    {{ $rol->name }}
                    <em>({{ $rol->description ?: 'N/A'}})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>