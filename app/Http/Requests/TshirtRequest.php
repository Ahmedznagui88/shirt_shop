<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TshirtRequest extends FormRequest
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
            'name' => 'required|min:2|max:100',
            'brand' => 'required|min:2|max:50',
            'logo' => 'required|image|mimes:jpeg,jpg,webp,avif,png',
            'size' => 'required|min:1|max:10',

           
        ];
    }

    public function messages(){
        return[
            'required' => 'il campo :attribute è richiesto',
            'min' => 'il campo :attribute deve essere di :min caratteri',
            'max' => 'il campo :attribute deve essere al massimo :max caratteri',
            'image' => 'il file deve essere un\'immagine',
            'mimes' => 'le esetenzioni accettate sono :value',
        ];
    }
}
