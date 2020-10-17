<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            'name' => 'required|min:3|max:100',
            'parent_id'=>'required'

        ];
    }
    public function messages()
    {
        return [
            'name.min' => 'Độ dài tên nhỏ nhất là 3 kí tự',
            'name.max' => 'Độ dài tên không quá 100 kí tự',
            'name.required' => 'Hãy nhập tên',
            'parent_id.required'=>'Hãy chọn danh mục',

        ];
    }
}
