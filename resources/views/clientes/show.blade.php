@extends('layout')

@section('content')
<div class="row">
    <div class="col-sm-8">
        <h2>
            Show cliente :
            {{ $cliente->nombre }}
            <a href="{{ route('clientes.index') }}" class="btn btn-outline-primary float-right">Listado</a>
            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-outline-warning float-right">Editar</a>
            <form action="{{ route('clientes.destroy', $cliente->id) }}" method ='POST'>
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-link">Eliminar</button>
            </form>
        </h2>
    </div>
    <div class="col-sm-4">
        @include('clientes.fragment.aside')
    </div>
    <div class="col-sm-8">
            <table class='table table-over table-sriped'>
                    <tbody>
                    <tr>
                        <td> <strong>ID:</strong> </td>
                        <td>{{ $cliente->id }}</td>

                    </tr>
                    <tr>
                        <td> <strong>CI:</strong> </td>
                        <td>{{ $cliente->ci }}</td>

                    </tr>
                    <tr>
                        <td> <strong>Nombres:</strong> </td>
                        <td>{{ $cliente->nombres  }}</td>

                    </tr>
                    <tr>
                        <td> <strong>Apellidos:</strong></td>
                        <td>{{ $cliente->apellidos }}</td>
                    </tr>
                    <tr>
                        <td><strong>Telefono:</strong></td>
                        <td>{{ $cliente->telefono }}</td>
                    </tr>
                    <tr>
                        <td><strong>Direccion:</strong></td>
                        <td>{{ $cliente->direccion }}</td>
                    </tr>
                    <tr>
                        <td><strong>Mac:</strong></td>
                        <td>{{ $cliente->mac }}</td>
                    </tr>
                    </tbody>
                </table>
    </div>
</div>


@endsection
