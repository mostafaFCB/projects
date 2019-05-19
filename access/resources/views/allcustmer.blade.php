@extends('layouts.adminpanel')
@section('active2')
    @stop
@section('title')
    All Data
    @stop
@section('content')
    <h1>Admins</h1>

    <table class="table table-bordered ">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
        </tr>
     @foreach($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->email}}</td>
            <td><a class="btn btn-danger glyphicon glyphicon-trash" href="/main/delete/{{$member->id}}">delete</a> | <a class="btn btn-success glyphicon glyphicon-edit" href="/edit/{{$member->id}}">Edit</a></td>

        </tr>
        @endforeach
    </table>


        @stop