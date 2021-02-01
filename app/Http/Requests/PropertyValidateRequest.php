<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyValidateRequest extends FormRequest
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
            'judet' => 'required',
            'localitate' => 'required',
            'strada' => 'required',
            'apartament' => 'required',
            'nr_strada' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'type' => 'required',
            'pret' => 'required',
            'title' => 'required',
            'description' => 'required',
            'transaction_type' => 'required',
        ];
    }
}
