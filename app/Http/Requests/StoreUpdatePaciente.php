<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdatePaciente extends FormRequest
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
    $rules        = [
      "nome"      => "required|min:3|max:160",
      "email"     => ["required", "min:3", "max:30", "email", Rule::unique('pacientes')->ignore($this->id)],
      "cpf"       => ["required", "min:11", "max:14", Rule::unique('pacientes')->ignore($this->id)],
      "cep"       => "required|min:8|max:9",
      "endereco"  => "required|min:3|max:160",
      "numero"    => "required|min:1|max:9",
      "uf"        => "required|min:2|max:4",
    ];

    return $rules;
  }
}
