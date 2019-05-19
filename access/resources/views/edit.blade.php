@extends('layouts.adminpanel')
@section('active2')
@stop
@section('title')
    Edit
@stop
@section('content')

<h3>Edit</h3>

<form  method="post" action="{{route('update')}}" enctype="multipart/form-data" class="form-group">
    <input type="hidden" name="_method" value="PATCH">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name" class="control-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{($member) ?($member['name']): ''}}">
    </div>
    <div class="form-group">
        <label for="email" class="control-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{($member) ?($member['email']): ''}}">
    </div>
    <div class="form-group">
        <label for="password" class="control-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="{{($member) ?($member['password']): ''}}">
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="update">
</form>
@stop
