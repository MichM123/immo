<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAnnonceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required',  
            'adresse' => 'required',
            'description' => 'required',
            'code_postal' => 'required',
            'superficie' => 'required',
            'nombre_pieces' => 'required',
            'prix' => 'required',
            'type_id' => 'required',
            'ville_id' => 'required',
            'document' => 'required|mimes:pdf|max:2048',
            'statut' => 'required',
            'type' => 'required',
            'images.*' => 'required|mimes:jpeg,jpg,png|max:2048',
        ];
    }
}
