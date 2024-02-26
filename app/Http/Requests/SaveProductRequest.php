<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'cfdi' => ['required', 'max:50'],
            'cfdis' => ['required', 'max:50'],
            'efecto' => ['required', 'max:50'],
            'fechaexp' => ['required'],
            'fechasat' => ['required'],
            'foliofiscal' => ['required', 'max:50'],
            'pac' => ['required', 'max:50'],
            'rfce' => ['required', 'max:50'],
            'rfcr' => ['required', 'max:50'],
            'rsocial' => ['required', 'max:50'],
            'rsocialr' => ['required', 'max:50'],
            'status' => ['required', 'max:50'],
        ];
    }
}