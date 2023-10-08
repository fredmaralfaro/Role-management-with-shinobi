
<div class="form-group">
    {{ Form::label('name', 'Nombre del producto') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripción') }}
    {{ Form::text('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">

    <button type="submit" class="btn btn-primary">Guardar</button>
</div>