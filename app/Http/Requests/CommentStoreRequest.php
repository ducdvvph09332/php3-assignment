<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentStoreRequest extends FormRequest
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
            'content' => 'required|min:2',
        ];
    }
    public function messages()
    {
        return [
            'content.required' => 'Hãy viết nội dung bình luận của bạn',
            'content.min' => 'Yêu cầu nội dung ít nhất 2 ký tự',
        ];
    }
}
