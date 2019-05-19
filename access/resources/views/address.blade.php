@extends('layouts.adminpanel')
@section('active1')
    active
@stop
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block" align="center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container">
        <div class="box-header">
            <h1>Address Data</h1>
        </div>
        <a href="addAddress" class="btn btn-primary" style="width: 200px"><span style="font-size: x-large"> + Add Address</span></a><br><br>
        <div align="center">
            <a href="{{Route('export.address')}}" class="btn btn-success">Export To Excel</a>
        </div>
        <div class="box-body"style="width:90%">
        <table class="table table-bordered table-hover   box box-primary" >

            <thead>
                <tr>
                    <th style="font-size: large">Brunch Name</th>
                    <th style="font-size: large">Address</th>
                    <th style="font-size: large">Phones</th>
                    <th style="font-size: large">Status</th>
                </tr>
            </thead>
            @if($address ==[])
                <div style="font-size: x-large;position: absolute;top: 50%;left: 10%;z-index: 99999;right: 0;text-align: center;"> don't have any data </div>
            @else
            @foreach($address as $address)
            <tbody>
                <tr>
                    <td>{{$address->brunch }}</td>
                    <td>{{$address->address }}</td>
                    <td>{{$address->phone }}</td>
                    @if($address->status ==1)
                        <td>
                            <div class="" style="width:80px;height: 20px;background-color: green" align="center">
                                <label style="padding-bottom: 100px;color: white"  for="">Active</label>
                            </div>
                        </td>
                    @elseif($address->status ==2)
                        <td>
                            <div class="" style="height: 20px;background-color: red" align="center">
                                <label style="padding-bottom: 100px;color: white"  for=""> DeActive</label>
                            </div>
                        </td>
                    @endif
                    <td><a class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Are you sure?')" href="/deleteAddress/{{$address->id}}/delete">Delete</a>
                        <a class="glyphicon glyphicon-edit btn btn-success" href="/address/{{$address->id}}/edit"></a></td>
                </tr>
            <tbody>
            @endforeach
            <tfoot>
                <tr>
                    <th style="font-size: large">Brunch Name</th>
                    <th style="font-size: large">Address</th>
                    <th style="font-size: large">Phones</th>
                    <th style="font-size: large">Status</th>
                </tr>
            </tfoot>
            @endif
        </table>

    </div>
    </div>

@stop
