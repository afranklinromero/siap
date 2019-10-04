@extends('layout')

@section('content')
<div class="row">
    <div class="col-sm-8">
        <h2>
            Editar cliente
            <a href="{{ route('clientes.index') }}" class="btn btn-outline-secondary float-right">Listado</a>
        </h2>


        {!! Form::model($cliente, ['route'=>['clientes.update', $cliente->id], 'method'=>'PUT']) !!}
            @include('clientes.fragment.form')
        {!! Form::close() !!}
    </div>
    <div class="col-sm-4">
        @include('clientes.fragment.aside')
    </div>
</div>
@endsection
