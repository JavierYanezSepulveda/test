@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Seleccionar fechas</div>
                <form action="historial_fecha" method="POST">
                        @csrf
                        

                        <label for="fecha">Fecha inicial</label>
                        <input  class="form-control "type="date" name="fecha_i">
                        <label for="fecha">Fecha final</label>
                        <input  class="form-control "type="date" name="fecha_f">

                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection