<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateConsulta extends FormRequest
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
   * Obtenha as regras de validação que se aplicam à solicitação.
   *
   * @return array
   */
  public function rules()
  {
    $rules                  = [
      "paciente_id"         => "required|integer",
      "medico_id"           => "required|integer",
      "data_agendamento"    => "required|date_format:Y-m-d",
      "hora_agendamento"    => "required|date_format:H:i"
    ];

    return $rules;
  }
}
