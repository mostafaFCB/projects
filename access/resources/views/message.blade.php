@extends('layouts.adminpanel')
@section('active2')
@stop
@section('title')
    All Data
@stop
@section('content')
    <h1>All Messages</h1>
    <div align="center">
        <a href="{{Route('export.message')}}" class="btn btn-success">Export To Excel</a>
    </div>
    <div class="box-body">
    <table id="example2" class="table table-bordered table-hover   box box-primary">
        <thead>
            <tr>
                <th style="font-size: large">ID</th>
                <th style="font-size: large">First Name</th>
                <th style="font-size: large">last Name</th>
                <th style="font-size: large">email</th>
                <th style="font-size: large">phone</th>
                <th style="font-size: large">Description</th>
            </tr>
        </thead>
        @if($message->count() > 0)
        @foreach($message as $message)
        <tbody>
            <tr>
                <td>{{$message->id}}</td>
                <td>{{$message->first_name}}</td>
                <td>{{$message->last_name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->phone}}</td>
                <td>{{$message->description}}</td>
                <td><a class=" btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Are you sure?')" href="/message/{{$message->id}}/delete">delete</a></td>

            </tr>
        <tbody>
        @endforeach
        <tfoot>
            <tr>
                <th style="font-size: large">ID</th>
                <th style="font-size: large">First Name</th>
                <th style="font-size: large">last Name</th>
                <th style="font-size: large">email</th>
                <th style="font-size: large">phone</th>
                <th style="font-size: large">Description</th>
            </tr>
        </tfoot>

        @else
            <div style="font-size: x-large;position: absolute;top: 50%;left: 10%;z-index: 99999;right: 0;text-align: center;"> don't have any data </div>
        @endif
    </table>
</div>

@stop