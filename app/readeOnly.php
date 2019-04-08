<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class readeOnly
{
    protected $title=[];


    function getAllTitle(){
        return $this->title;
    }

    function getTitle($id){
        return $this->title[$id];
    }
}
