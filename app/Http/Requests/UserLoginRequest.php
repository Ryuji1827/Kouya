<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == 'login/add/check')
        {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'required|email',
            'tel' => 'required|numeric|digits:11',
            'pass1' => 'required',
            'pass2' => 'same:pass1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '入力必須事項です。',
            'mail.email' => 'メールアドレスが必要です。',
            'mail.required' => '入力必須事項です。',
            'tel.numeric' => '数値で入力してください。',
            'tel.digits' => 'ハイフンなしの11桁で入力してください。',
            'tel.required' => '入力必須事項です。',
            'pass1.required' => '入力必須事項です。',
            'pass2.same' => '上記と同じものを入力してください。',
        ];
    }
}
