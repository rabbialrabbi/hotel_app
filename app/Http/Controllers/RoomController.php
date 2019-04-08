<?php

namespace App\Http\Controllers;

use App\reservation;
use App\Rooms;
use App\client;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index($id)
    {
        $room = Rooms::all();
        $client = Client::findOrFail($id);
        $data['room'] = $room;
        $data['client'] = $client;
        $data['dateFrom']= '';
        $data['dateTo']= '';

        return view('Room.room', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Store($client_id, $room_id, $dateFrom, $dateTo)
    {
        $reservation = new reservation();

        $reservation->date_in= $dateFrom;
        $reservation->date_out= $dateTo;
        $reservation->client_id= $client_id;
        $reservation->room_id= $room_id;
        $reservation->save();

        return redirect('/clients');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');
        $rooms = new Rooms();
        $room = $rooms->getAvailableRoom($dateFrom, $dateTo);
        $client = Client::findOrFail($id);
        $data = [
            'room'=>$room,
            'client'=>$client,
            'dateFrom'=>$dateFrom,
            'dateTo'=>$dateTo
        ];



        return view('Room.room', $data);
    }


}
