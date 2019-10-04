@extends('layout')

@section('content')
<div class="row">
    <div class="col-sm-8">
        <h2>
            Nuevo cliente
            <a href="{{ route('clientes.index') }}" class="btn btn-outline-secondary float-right">Listado</a>
        </h2>

        @include('clientes.fragment.error')

        {!! Form::open(['route'=>'clientes.store', 'class'=> "needs-validation", 'novalidate' => '1']) !!}
            @include('clientes.fragment.form')
        {!! Form::close() !!}
    </div>
    <div class="col-sm-4">
        @include('clientes.fragment.aside')
    </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
@endsection
