<?php

namespace App\Http\Requests\User;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class CreateUserRequest extends FormRequest
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
        $name = request()->get('name');
        return [
            'name' => 'required|string|max:255',
            'phone' =>["required", 'string', 'max:20', Rule::unique('Rentacar\Domain\Entities\User\User', 'phone')->where('name', $name)]
        ];
    }
    public function messages()
    {
        return [
            'phone.unique' => 'User with this name and phone number already exist'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'message' => "The given data is invalid",
                'errors' => $validator->errors()
            ], 404)
        );
    }
}
