@extends('layout')

@section('title','Edit')

@section('content')
    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>Edit Client</h4>
            <form action="/clients/{{$client->id}}" method="post">
                @csrf()
                @method('patch')
                <div class="medium-4  columns">
                    <label>Title</label>
                    <select name="title" value="{{old('title') ? old('title') : $client->title}}">
                        @foreach($title->getAllTitle() as $title)
                            <option value="{{$title}}">{{$title}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="medium-4  columns">
                    <label>Name</label>
                    <input name="name" type="text" value="{{old('name') ? old('name') : $client->name}}">
                </div>
                <div class="medium-4  columns">
                    <label>Last Name</label>
                    <input name="last_name" type="text" value="{{old('last_name') ? old('last_name') : $client->last_name}}">
                </div>
                <div class="medium-8  columns">
                    <label>Address</label>
                    <input name="address" type="text" value="{{old('address') ? old('address') : $client->address}}">
                </div>
                <div class="medium-4  columns">
                    <label>zip_code</label>
                    <input name="zip_Code" type="text" value="{{old('zip_Code') ? old('zip_Code') : $client->zip_code}}">
                </div>
                <div class="medium-4  columns">
                    <label>City</label>
                    <input name="city" type="text" value="{{old('city') ? old('city') : $client->city}}">
                </div>
                <div class="medium-4  columns">
                    <label>State</label>
                    <input name="state" type="text" value="{{old('state') ? old('state') : $client->state}}">
                </div>
                <div class="medium-12  columns">
                    <label>Email</label>
                    <input name="email" type="text" value="{{old('email') ? old('email') : $client->email}}">
                </div>
                <div class="medium-12  columns">
                    <input value="SAVE" class="button success hollow" type="submit">
                </div>
            </form>
        </div>
    </div>
    @foreach($errors->all() as $error)
        {{$error.'<br>'}}
    @endforeach

@endsection