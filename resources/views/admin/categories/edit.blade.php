@extends('adminlte::page')

@section('title', 'Evaluaciones')

@section('content_header')
    <h1>Editar Categorías</h1>
@stop

@section('content')
    <div class="">
        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{(session('info'))}}</strong>
            </div>
        @endif
    </div>
    <div class="card">
        <div class="card-body">
            {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría']) !!}

                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripción') !!}
                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción de la categoría']) !!}

                    @error('descripcion')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Actualizar Categoría', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>    
    </div>    
@stop

