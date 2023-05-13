<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateCarRequest extends FormRequest
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
    public function rules(): array
    {
        $currYear = date("Y");
        return [
            'id' => 'required|numeric',
            'licencePlate' => 'string|unique:Rentacar\Domain\Entities\Car',
            'year' => "numeric|max:$currYear",
            'mark' => 'string',
            'model' => 'string',
            'registerDate' => 'date|before:tomorrow|date_format:d-m-Y',
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
