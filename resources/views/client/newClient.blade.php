@extends('layout')

@section('title','Home')

@section('content')


<div class="row">
    <div class="medium-12 large-12 columns">
        <h4>New Client</h4>
        <form action="/clients/new" method="post">
            @csrf()
            <div class="medium-4  columns">
                <label>Title</label>
                <select name="title">
                    @foreach($title->getAllTitle() as $title)
                    <option value="{{$title}}">{{$title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="medium-4  columns">
                <label>Name</label>
                <input name="name" type="text">
            </div>
            <div class="medium-4  columns">
                <label>Last Name</label>
                <input name="last_name" type="text">
            </div>
            <div class="medium-8  columns">
                <label>Address</label>
                <input name="address" type="text">
            </div>
            <div class="medium-4  columns">
                <label>zip_code</label>
                <input name="zip_Code" type="text">
            </div>
            <div class="medium-4  columns">
                <label>City</label>
                <input name="city" type="text">
            </div>
            <div class="medium-4  columns">
                <label>State</label>
                <input name="state" type="text">
            </div>
            <div class="medium-12  columns">
                <label>Email</label>
                <input name="email" type="text">
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