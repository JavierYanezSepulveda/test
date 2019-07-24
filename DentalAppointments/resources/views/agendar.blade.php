@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Acciones</div>
                <form action="store" method="POST">
                        @csrf
                        <label for="servicio">Servicio</label>
                        <select class="form-control " name="servicio" id="servicio" required>
                            @foreach($servicios as $servicio)
                                <option value="{{$servicio->id}}">{{$servicio->name}}-${{$servicio->price}}</option>
                            @endforeach
                        </select>    
                        <label for="dentista">Dentista</label>
                        <select class="form-control " name="dentista" id="dentista" required>
                            @foreach($dentistas as $dentista)
                            <option value="{{$dentista->id}}">{{$dentista->name}}</option>
                            @endforeach
                        </select>
                        <label for="paciente">Paciente</label>
                        <select class="form-control " name="paciente" id="paciente" required>
                            @foreach($pacientes as $paciente)
                            <option value="{{$paciente->id}}">{{$paciente->name}}</option>
                            @endforeach
                        </select>
                        
                        <label for="costo">Costo</label>
                        <input placeholder="$" class="form-control " type="text" name="costo" required>

                        <label for="fecha">Fecha</label>
                        <input  class="form-control "type="date" name="fecha" required>

                        <input type="submit" class="btn btn-primary">
                    </form>

                    <label>*Recuerde que el COSTO debe ser mayor al precio del servicio</label>
                </div>
            </div>
        </div>
    </div>
@endsection