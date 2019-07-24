@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Historial</div>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Fecha Consulta</th>
                <th>Paciente</th>
                <th>Servicio</th>
                <th>Médico</th>
                <th>Precio Servicio</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
    @foreach($historial as $historia)
    <tr>
    <th>{{$historia->date}}</th>
    <th>{{$historia->patient->name}}</th>
    <th>{{$historia->service->name}}</th>
    <th>{{$historia->dentist->name}}</th>
    <th>$ {{$historia->price}}</th>
    <th><a href="editar/{{$historia->id}}">Editar</a>||<a href="eliminar/{{$historia->id}}">Eliminar</a></th>
    </tr>
    @endforeach
    </tbody>
    </table>
    <br>
    <br>
    <label>Ganancia Total = {{$total}}</label>
    </div>
    </div>
    </div>
    </div>



   
@endsection

