<?php

namespace App\Http\Requests\Rent;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;
use Rentacar\Domain\Entities\User\Enums\UserTypeEnum;

class CreateRentRequest extends FormRequest
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
        $customerId = (int)request()->input('customer_id');
        $workerId = (int)request()->input('worker_id');
        $carId = (int)request()->input('car_id');
        $stars = request()->input('starts');
        return [
            'customer_id' => ['required', 'numeric',
                Rule::exists('Rentacar\Domain\Entities\User\User', 'id')
                    ->where('id', $customerId)
                    ->where('role', UserTypeEnum::CUSTOMER->value)
            ],
            'worker_id' => ['required', 'numeric',
                Rule::exists('Rentacar\Domain\Entities\User\User', 'id')
                    ->where('id', $workerId)
                    ->where('role', UserTypeEnum::WORKER->value)
            ],
            'car_id' => ['required', 'numeric',
                Rule::exists('Rentacar\Domain\Entities\Car', 'id')
                    ->where('id', $carId),
            ],
            'starts' => ['required', 'date_format:d-m-Y'],
            'ends' => ['required', 'date_format:d-m-Y', 'after:'.$stars]
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'message' => "The given data is invalid",
                'errors' => $validator->errors()
            ], 400)
        );
    }
}
