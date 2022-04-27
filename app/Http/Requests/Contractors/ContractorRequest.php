<?php

namespace App\Http\Requests\Contractors;

use Illuminate\Foundation\Http\FormRequest;

class ContractorRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|string|max:30|min:3",
            "company" => "required|string|min:5",
            "address" => "required|string|min:8",
            "country" => "required|string|min:5",
            "phone" => "required",
        ];
    }
    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'name.string' => 'اسم اللغه لابد ان يكون احرف',
            'company.string' => 'اختصار اللغه لابد ان يكون احرف',
            'name.max' => 'اسم اللغه لابد الا يزيد عن 100 حرف ',
            'company.max' => 'اختصار اللغه لابد الا يزيد عن 10 احرف ',
        ];
    }

}
