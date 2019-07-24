@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Acciones</div>
                    <div>
                        <a class="btn btn-primary" name="agendar" href="agendar">Agendar consulta</a>
                        <a class="btn btn-primary" name="historial" href="historial">Historial</a>
                        <a class="btn btn-primary" name="historial_fecha" href="fechas">Historial por fecha</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection