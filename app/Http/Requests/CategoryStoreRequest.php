<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        switch ($this->method()) {
            case 'POST': {
                    return [
                        'name' => 'required|min:3|max:100|unique:categories',
                    ];
                }
            case 'PUT': {
                    return [
                        'name' => [
                            'required',
                            'min:3',
                            'max:100',
                            Rule::unique('categories')->ignore($this->category->id, 'id'),
                        ],
                    ];
                }
        }
    }
    public function messages()
    {
        return [
            'name.required' => 'Hãy nhập tên',
            'name.min' => 'Độ dài tên nhỏ nhất là 3 kí tự',
            'name.max' => 'Độ dài tên không quá 100 kí tự',
            'name.unique' => 'Tên đã tồn tại trên hệ thống',
        ];
    }
}
