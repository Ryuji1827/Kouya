<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $guarded = array('id');

    public function getData()
    {
        return $this->name . "\n" . $this->league . "\n" . $this->when . "\n" . $this->time . "\n"
        . $this->howMany . "\n" . $this->map . "\n" . $this->level ."\n" . $this->money;
    }
}
