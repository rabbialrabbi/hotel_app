<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Client::All();
        return view('client.clients',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title= app('title');
        return view('client.newClient',['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $validation = $this->validation();
        Client::create($validation);

        return redirect('/clients');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client= Client::findOrFail($id);
        $title= app('title');
        $data= ['id'=>$id,'title'=>$title,'client'=>$client];
        return view('client.editClient', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $validation= $this->validation();
        $Client= Client::findOrFail($id);

        $Client->update($validation);

        return redirect('/clients');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validation(){

        return $validation= request()->validate([
            'title'=>'required',
            'name'=>'required|min:3',
            'last_name'=>'required|min:3',
            'address'=>'required|min:3',
            'zip_Code'=>'required|min:3',
            'city'=>'required|min:3',
            'state'=>'required',
            'email'=>'required|min:3',
        ]);
    }
}
