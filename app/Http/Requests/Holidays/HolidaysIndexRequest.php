<?php

namespace App\Http\Requests\Holidays;

use Pearl\RequestValidate\RequestAbstract;

class HolidaysIndexRequest extends RequestAbstract
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'keyword' => '',
            'year' => '',
            'month' => '',
            'sort_by' => '',
            'sorting' => ''
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [

        ];
    }
}
