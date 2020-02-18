<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'tel' => '',
        'password' => 'password'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->name . ': ' . $this->tel . ': ' . $this->password;
    }
}
