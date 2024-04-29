<?php

namespace App\Http\Requests\Approval;

use Pearl\RequestValidate\RequestAbstract;

class ApprovalIndexRequest extends RequestAbstract
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
            'dateFrom' => 'required',
            'dateTo' => 'required',
            'departmentId' => 'nullable',
            'projectId' => 'nullable',
            'sortBy' => 'nullable',
            'sorting' => 'nullable'
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
            'required' => ':attribute field is required'
        ];
    }
}
