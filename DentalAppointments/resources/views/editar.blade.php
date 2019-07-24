@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Acciones</div>
                <form action="{{ action('AppointmentsController@update') }}" method="POST">
                        @csrf
                        <label for="servicio">Servicio</label>
                        <select class="form-control " name="servicio" id="servicio" required>
                            <option value="{{$appointment[0]->service_id}}">{{$appointment[0]->service->name}}</option>
                            @foreach($servicios as $servicio)
                                <option value="{{$servicio->id}}">{{$servicio->name}}</option>
                            @endforeach
                        </select>    
                        <label for="dentista">Dentista</label>
                        <select class="form-control " name="dentista" id="dentista" required>
                            <option value="{{$appointment[0]->dentist_id}}">{{$appointment[0]->dentist->name}}</option>
                            @foreach($dentistas as $dentista)
                            <option value="{{$dentista->id}}">{{$dentista->name}}</option>
                            @endforeach
                        </select>
                        <label for="paciente">Paciente</label>
                        <select class="form-control " name="paciente" id="paciente" required>
                            <option value="{{$appointment[0]->patient_id}}">{{$appointment[0]->patient->name}}</option>
                            @foreach($pacientes as $paciente)
                            <option value="{{$paciente->id}}">{{$paciente->name}}</option>
                            @endforeach
                        </select>
                        
                        <label for="costo">Costo</label>
                        <input placeholder="$" class="form-control " value="{{$appointment[0]->price}}" type="text" name="costo" required>

                        <label for="fecha">Fecha</label>
                        <input  class="form-control "type="date" value="{{$appointment[0]->date}}" name="fecha" required>
                        <input type="hidden" value="{{$appointment[0]->id}}" name="id">
                        <input type="submit" class="btn btn-primary">
                    </form>
                    <label>*Recuerde que el COSTO debe ser mayor al precio del servicio</label>
                </div>
            </div>
        </div>
    </div>





@endsection