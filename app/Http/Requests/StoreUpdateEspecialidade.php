<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEspecialidade extends FormRequest
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
    $rules    = [
      "nome"  => "required|min:3|max:160|unique:especialidades",
    ];

    return $rules;
  }
}
