<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Patient;
use App\Dentist;
use App\Service;
use App\Appointment;
use App\Http\Requests\StoreAppointment;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agendar()
    {
        $servicios = Service::all();
        $dentistas = Dentist::all();
        $pacientes = Patient::all();



        return view('agendar', compact('servicios', 'dentistas', 'pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validar = Service::select('price')->where('id', $request->servicio)->first();
        
        if($request->costo < $validar->price)
        {
            return back();
        }else
        {
        $insertFields = [
            'date' => $request->fecha,
            'price' => $request->costo,
            'dentist_id' => $request->dentista,
            'patient_id' => $request->paciente,
            'service_id' => $request->servicio
        ];

        Appointment::insert($insertFields);
    
    
        return redirect()->action('AppointmentsController@historial');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function historial()
    {
        $historial = Appointment::with('dentist', 'patient', 'service' )->get();
        $sum = Appointment::sum('price');
        $dos = DB::table('appointments')->join('services', 'appointments.service_id', '=', 'services.id')->sum('services.price');
        
        $total= $sum - $dos;

        // dd($sum, $dos, $total);
        return view('historial', compact('historial', 'total'));
    }

    public function fechas()
    {

        return view('fechas');

    }
    
    public function historial_fecha(Request $request)
    {
        $historial_fecha = Appointment::with('dentist', 'patient', 'service' )->whereBetween('date', [$request->fecha_i, $request->fecha_f])->get();
        $sum = Appointment::whereBetween('date', [$request->fecha_i, $request->fecha_f])->sum('price');
        $dos = DB::table('appointments')->join('services', 'appointments.service_id', '=', 'services.id')->whereBetween('date', [$request->fecha_i, $request->fecha_f])->sum('services.price');
        $total= $sum - $dos;

        // dd($sum, $dos, $total);
        return view('historial_fecha', compact('historial_fecha', 'total'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        
        $appointment = Appointment::with('dentist', 'patient', 'service' )->where('id', $id)->get();
        
        $servicios = Service::all();
        $dentistas = Dentist::all();
        $pacientes = Patient::all();


        // dd($appointment);
        return view('editar', compact('servicios', 'dentistas', 'pacientes', 'appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        $validar = Service::select('price')->where('id', $request->servicio)->first();
        
        if($request->costo < $validar->price)
        {
            return back();
        }else
        {
        
        $updateFields = [
            'date' => $request->fecha,
            'price' => $request->costo,
            'dentist_id' => $request->dentista,
            'patient_id' => $request->paciente,
            'service_id' => $request->servicio
        ];

        Appointment::where('id', $request->id)->update($updateFields);
    
    
        return redirect()->action('AppointmentsController@historial');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appointment::where('id', $id)->delete();

        return redirect()->action('AppointmentsController@historial');
    }


}
