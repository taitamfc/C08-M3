<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormExampleRequest extends FormRequest
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
        $roles = [
            'username'      => 'required|min:8',
            'email'         => 'required|email|unique:users',
        ];

        return $roles;
    }

    public function messages()
    {
        $messages = [
            'username.required' => 'Truong username la bat buoc',
            'username.min'      => 'Vui long nhap it nhat 8 ky tu',
            'email.required'    => 'Truong email la bat buoc',
            'email.email'       => 'Vui long nhap dung email',
            'email.unique'      => 'Email da ton tai',
        ];

        return $messages;
    }
}
