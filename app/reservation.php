<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    public $guarded= [];

    public function clients(){
        return $this->belongsTo(Client::class);
    }
}
