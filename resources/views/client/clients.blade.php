@extends('layout')

@section('title','Home')

@section('content')


<div class="row">
    <div class="medium-12 large-12 columns">
        <h4>Clients</h4>
        <div class="medium-2  columns"><a class="button hollow success" href="./clients/create">ADD NEW CLIENT</a></div>



        <table class="stack">
            <thead>
            <tr>
                <th width="200">Name</th>
                <th width="200">Email</th>
                <th width="200">Action</th>
            </tr>
            </thead>
            <tbody>


                @foreach($data as $data)
                    <tr>
                    <td>{{$data->title.'. '.$data->name.' '.$data->last_name}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                        <a class="hollow button" href="/clients/{{$data->id}}/edit">EDIT</a>
                        <a class="hollow button warning" href="/room/{{$data->id}}">BOOK A ROOM</a>
                    </td>
            </tr>
                    @endforeach

            </tbody>
        </table>


    </div>
</div>

@endsection