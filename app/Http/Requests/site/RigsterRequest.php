<?php

namespace App\Http\Requests\site;

use Illuminate\Foundation\Http\FormRequest;

class RigsterRequest extends FormRequest
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
        'name'=>'required|string|min:3|max:255',
        'email'=>'required',
        'phone'=>'nullable',
        'password'=>'required|string|min:6',
        'type'=>'required|string|in:doctor,Patient',
        ];
    }
}
