<?php

namespace App\Http\Requests;


use App\Mail\Test;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Mail;

class CreateCarRequest extends FormRequest
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
        $currYear = date("Y");
        return [
            'licencePlate' => 'required|string|unique:Rentacar\Domain\Entities\Car',
            'year' => "required|numeric|max:$currYear",
            'mark' => 'required|string',
            'model' => 'required|string',
            'registerDate' => 'required|date|before:tomorrow|date_format:d-m-Y'
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
