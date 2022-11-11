<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_name' => ['required', 'min:3', 'max:50'],
            'email' => ['required', 'email'],
            'birthdate' => ['required', 'date'],
            'phone' => ['required'],
            'password' => ['required']
        ];
    }
}
