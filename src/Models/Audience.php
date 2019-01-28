<?php

namespace DazzleApp\Audience\Models;

use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    protected $guarded = [];

    public function setConfirmed()
    {
        $this->confirmed = true;
        return $this;
    }
}
