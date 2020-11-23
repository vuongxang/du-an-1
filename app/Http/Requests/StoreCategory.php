<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
            'name' => 'min:5|max:100',
            'description' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được bỏ trống',
            'min' => ':attribute phải lớn hơn :min ký tự.',
            'max' => ':attribute phải nhỏ hơn :max ký tự.',
            'in' => 'The :attribute must be one of the following types: :values',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên',
            'description' => 'Mô tả',
        ];
    }
}
