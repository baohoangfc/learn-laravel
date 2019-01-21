<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'requied|unique:learnphp, users',
            'password' => 'required'
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Vui lòng nhập email',
            'name.required' => 'Vui lòng nhập Họ Tên',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Vui lòng nhập password'
        ];
    }
}
