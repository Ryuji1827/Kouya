<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == 'add')
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
            'mail' => 'email',
            'tel' => 'integer|digits:11',
            'pass1' => 'password',
            'pass2' => 'password',
        ];
    }
}
