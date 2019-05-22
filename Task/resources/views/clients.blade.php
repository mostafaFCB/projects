@extends('layouts.adminpanel')

@section('content')

    <div class="container col-md-12">
        <div class="box-header">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block" align="center">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <h1>clients Data</h1>

        </div>
        <a href="addclient" class="btn btn-primary" style="width: 200px"><span style="font-size: x-large"> + Add Client</span></a><br><br>
        @if(count($clients) > 0)
            <div align="center">
                <a href="{{Route('export.client')}}" class="btn btn-success">Export To Excel</a>
            </div>
            <div class="box-body col-md-12">
                <table class="table table-bordered table-hover   box box-primary">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Client Name</th>
                        <th>Client Address</th>
                        <th>Product Name</th>
                        <th>Product Count</th>
                        <th>Product price</th>
                        <th>total price</th>

                    </tr>
                    </thead>

                    @foreach($clients as $client)
                        <tbody>
                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->client_name}}</td>
                            <td>{{$client->address}}</td>
                            <td>{{$client->pro_name}}</td>
                            <td>{{$client->client_count}}</td>
                            <td>{{$client->price_unit}}</td>
                            <td>{{$client->price_unit * $client->client_count}}</td>
                            <td class="col-md-1"><a class="btn btn-danger  col-md-6" onclick="return confirm('Are you sure?')"  href="/deleteclient/{{$client->id}}"><i class="fa fa-trash"></i></a>
                                <a class=" btn btn-success col-md-6" href="/clients/{{$client->id}}/edit"><i class="fa fa-edit"></i></a></td>
                        </tr>
                        <tbody>
                    @endforeach

                </table>
                <div class="text-center">
                    {{$clients->links()}}
                </div>
            </div>
        @else
            <div style="font-size: xx-large;position: absolute;top: 50%;left: 10%;z-index: 99999;right: 0;text-align: center;"> don't have any data </div>
        @endif
    </div>


@stop
