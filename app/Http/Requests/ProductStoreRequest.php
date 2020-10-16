<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Expr\FuncCall;

class ProductStoreRequest extends FormRequest
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
            'image_url' => 'required|mimes:jpeg,jpg,png,gif',
            'price' => 'required|numeric|min:1',
            'sale_percent' => 'required|min:0|numeric',
            'stocks' => 'required|min:1|numeric',
            'description' => 'required|min:3|max:255'

        ];
    }
    public function messages()
    {
        return [
            'name.min' => 'Độ dài tên nhỏ nhất là 3 kí tự',
            'name.max' => 'Độ dài tên không quá 100 kí tự',
            'name.required' => 'Hãy nhập tên',
            'image_url.required' => 'Hãy chọn ảnh',
            'image_url.mimes' => 'Định dạng ảnh không phù hợp',
            'price.required' => 'Hãy nhập giá tiền',
            'price.numeric' => 'Hãy nhập số',
            'price.min' => 'Số tiền nhỏ nhất là 1',
            'sale_percent.required' => 'Hãy Nhập triết khấu',
            'sale_percent.numeric' => 'Hãy nhập số',
            'sale_percent.min' => 'Nhỏ nhất là 0',
            'stocks.required' => 'Hãy nhập stocks',
            'stocks.min' => 'Nhỏ nhất là 1',
            'stocks.numeric' => 'Hãy nhập số',
            'description.required' => 'Hãy nhập thông tin',
            'description.min' => 'Nhỏ nhất là 3 kí tự',
            'description.max' => 'Lớn nhất là 255 kí tự'
        ];
    }
}
