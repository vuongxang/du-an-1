<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StoreProduct extends FormRequest
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
            'image' => [
                'required',
            ],
            'price'=>'required',
            'short_desc'=>'required',
            'detail'=>'required',
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
            'image' => 'Ảnh',
            'price' => 'Giá',
            'short_desc' => 'Mô tả ngắn',
            'detail' => 'Chi tiết',
        ];
    }
}
