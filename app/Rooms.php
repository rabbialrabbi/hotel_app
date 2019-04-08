<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rooms extends Model
{
    public $guarded= [];

    public function getAvailableRoom($date_in,$date_out){

        $availableRoom= DB::select('SELECT rooms.id, rooms.name FROM rooms WHERE rooms.id NOT IN (SELECT r.room_id FROM reservations as r WHERE(r.date_out < \':date_in \' OR r.date_in>\' :date_out \'))',['date_in'=>$date_in,'date_out'=>$date_out]);
        return $availableRoom;


    }
}
