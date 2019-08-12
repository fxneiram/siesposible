<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Votante;

class UpdateVotanteRequest extends FormRequest
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
        $rules = Votante::$rules;
        if ($this->isMethod('patch')) {
            unset($rules['cedula']);
            //dd($rules);
        }
        return $rules;
    }
}
