<?php

namespace App\Http\Requests;

use App\Models\Medico;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateMedico extends FormRequest
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
    $rules                = [
      "nome"              => "required|min:3|max:160",
      "crm"               => ['required', Rule::unique('medicos')->ignore($this->id)],
      "especialidade_id"  => "required|integer",
    ];

    return $rules;
  }
}
