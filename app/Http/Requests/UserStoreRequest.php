<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserStoreRequest extends FormRequest
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
                        'first_name' => 'required|max:50',
                        'last_name' => 'required|max:50',
                        'email' => 'required|email:rfc|unique:users',
                        'password' => 'required|min:6|max:255',
                        'confirm_password' => 'same:password',
                        'address' => 'required|min:2|max:255',
                        'birthday' => 'required|date_format:Y-m-d|before:today'
                    ];
                }
            case 'PUT': {
                    return [
                        'first_name' => 'required|max:50',
                        'last_name' => 'required|max:50',
                        'email' => [
                            'required',
                            'email:rfc',
                            Rule::unique('users')->ignore($this->user->id, 'id'),
                        ],
                        'address' => 'required|min:2|max:255',
                        'birthday' => 'required|date_format:Y-m-d|before:today',
                    ];
                }
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Yêu cầu nhập họ',
            'first_name.max' => 'Yêu cầu nhập họ không quá 50 ký tự',
            'last_name.required' => 'Yêu cầu nhập tên',
            'last_name.max' => 'Yêu cầu nhập tên không quá 50 ký tự',
            'email.required' => 'Yêu cầu nhập email',
            'email.email' => 'Yêu cầu nhập email đúng định dạng',
            'email.unique' => 'Email này đã tồn tại trên hệ thống',
            'password.required' => 'Yêu cầu nhập mật khẩu',
            'password.min' => 'Yêu cầu nhập mật khẩu ít nhất 6 ký tự',
            'password.max' => 'Yêu cầu nhập mật khẩu không quá 255 ký tự',
            'confirm_password.same' => 'Yêu cầu mật khẩu nhập lại và mật khẩu phải trùng khớp',
            'address.required' => 'Yêu cầu nhập địa chỉ',
            'address.min' => 'Yêu cầu nhập địa chỉ ít nhất 2 ký tự',
            'address.max' => 'Yêu cầu nhập địa chỉ không quá 255 ký tự',
            'birthday.required' => 'Yêu cầu nhập ngày sinh',
            'birthday.date_format' => 'Yêu cầu nhập ngày sinh đúng định dạng',
            'birthday.before' => 'Ngày sinh phải nhỏ hơn tương lai',
        ];
    }
}
