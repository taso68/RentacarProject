<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'licencePlate' => 'required|string',
            'year' => "required|number|max:$currYear",
            'mark' => 'required|string',
            'model' => 'required|string',
        ];
    }
}
