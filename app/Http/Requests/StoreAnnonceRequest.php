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
            'type_id' => 'required',
            'superficie' => 'required',
            'statut' => 'required',
            'description' => 'required',
            'nombre_pieces' => 'required',
            'prix' => 'required',
            'salle_bains' => 'required',
            'ville_id' => 'required',
            'piscine' => 'required',
            'garage' => 'required',
            'meuble' => 'required',
            'document' => 'required|mimes:pdf|max:2048',
            'type' => 'required',
            'images.*' => 'required|mimes:jpeg,jpg,png,webp|max:2048',
        ];
    }
}
