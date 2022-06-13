@extends('adminlte::page')

@section('title', 'Evaluaciones')

@section('content_header')
    <h1>Crear Ítem:</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.items.store']) !!}

            <div class="form-group">
                {!! Form::label('nroitem', 'Nro Ítem: ') !!}
                {!! Form::number('nroitem', '##', ['class' => 'form-control ']) !!}

                @error('nroitem')
                    <small class="text-danger">{{$message}}</small>
                @enderror

            </div>
            <div class="form-group">
                {!! Form::label('name', 'Nombre: ') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Ítem...']) !!}

                @error('name')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción: ') !!}
                {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion']) !!}

                @error('descripcion')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('estado', 'Estado: ') !!}
                {!! Form::select('estado', ['0' => 'No puntuado aún', '1' => 'Ya fue puntuado'], '0', ['class' => 'form-control']) !!}

                @error('estado')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>                

            {!! Form::submit('Crear Ítem', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop