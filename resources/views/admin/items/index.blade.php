@extends('adminlte::page')

@section('title', 'Evaluaciones')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.items.create')}}">Nuevo Ítem</a>
    <h1>Listado de Ítems:</h1>
@stop

@section('content')
   <div class="card">
       <div class="card-body">
           <table class="table table-striped">
                <thead>
                    <th>Nro Item</th>
                    <th>Name</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{$item->nroitem}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->estado}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.items.edit', $item)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.items.destroy', $item)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
           </table>
       </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop