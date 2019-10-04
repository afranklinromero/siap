@if($errors->any())
    <div class="alert alert-danger">
        <h2>Por favor corrige los errores e intenta nuevamente</h2>
         <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    {!! Form::label('ci') !!}
    {!! Form::text('ci', null, ['class'=>'form-control', 'value' =>"{{ old('ci') }}", 'placeholder' => 'Ingrese ci...',])  !!}
</div>
<div class="form-group">
    {!! Form::label('nombres') !!}
    {!! Form::text('nombres', null, ['class'=>'form-control', 'value' =>"{{ old('nombres') }}", 'placeholder' => 'Ingrese nombres...']) !!}

</div>
<div class="form-group">
    {!! Form::label('apellidos') !!}
    {!! Form::text('apellidos', null, ['class'=>'form-control', 'value' =>"{{ old('apellidos') }}", 'placeholder' => 'Ingrese apellidos...' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('telefono') !!}
    {!! Form::text('telefono', null, ['class'=>'form-control', 'value' =>"{{ old('telefono') }}", 'placeholder' => 'Ingrese telefono...' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('direccion') !!}
    {!! Form::text('direccion', null, ['class'=>'form-control', 'value' =>"{{ old('direccion') }}", 'placeholder' => 'Ingrese direccion...' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('ubicacion') !!}
    {!! Form::text('ubicacion', null, ['class'=>'form-control', 'value' =>"{{ old('ubicacion') }}", 'placeholder' => 'Ingrese ubicacion...' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('mac') !!}
    {!! Form::text('mac', null, ['class'=>'form-control', 'value' =>"{{ old('mac') }}", 'placeholder' => 'Ingrese mac...' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('estado') !!}
    {!! Form::text('estado', null, ['class'=>'form-control', 'value' =>"{{ old('estado') }}", 'placeholder' => 'Ingrese estado...' ]) !!}
</div>

<div class="form-group">
    {!! Form::submit('Guardar', ['class'=>'btn-primary']) !!}
</div>

