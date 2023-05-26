<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

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
            'name' => ['required', 'string', 'max:25', 'min:3'],
            'email' => ['required', 'string', 'email', Rule::unique('Rentacar\Domain\Entities\User\User', 'email')],
            'password' => ['required', 'string', 'confirmed', Password::defaults()],
            'phone' => ['required', 'string', 'max:14','min:7'],
        ];
    }
}
