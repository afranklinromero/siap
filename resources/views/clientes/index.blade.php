@extends('layout')

@section('content')
<div class="row">
    <div class="col-sm-8">
        <h2>
            Listado de clientes
            <a href="{{ route('clientes.create')}}" class='btn btn-outline-secondary float-right'>Nuevo</a>
        </h2>
        @include('clientes.fragment.info')
    </div>
<div class="row">
    <div class="col-sm-8">
        <table class='table table-over table-sriped'>
            <thead>
                <tr>
                    <th width = '200'>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>tireccion</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombres }}</td>
                <td>{{ $cliente->apellidos }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->estado }}</td>
                <td><a href="{{ route('clientes.show', $cliente->id) }}">Ver</a></td>
                <td><a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a></td>
                <td>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method ='POST'>
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-link">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{ $clientes->render() }}
    </div>
    <div class="col-sm-4">
        @include('clientes.fragment.aside')
    </div>
</div>
@endsection
