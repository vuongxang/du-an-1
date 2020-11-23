<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTopic extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'min:5|max:100',
            'image' => [
                'required',
            ],
            'desc'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được bỏ trống',
            'min' => ':attribute phải lớn hơn :min ký tự.',
            'max' => ':attribute phải nhỏ hơn :max ký tự.',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên',
            'image' => 'Ảnh',
            'desc' => 'Mô tả',
        ];
    }
}
