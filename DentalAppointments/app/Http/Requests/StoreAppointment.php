<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date' => 'required',
            'price' => 'required',
            'dentist_id' => 'required',
            'patient_id' => 'required',
            'service_id' => 'required'
        ];
    }

    public function messages(){
        return [
            'date.required' => 'Es necesario seleccionar la fecha ',
            'price.required' => 'Es necesario indicar un precio ',
            'dentist_id.required' => 'Es necesario seleccionar un dentista',
            'patient_id.required' => 'Es necesario seleccionar un paciente',
            'service_id.required' => 'Es necesario seleccionar un servicio'
        ];
    }
}
