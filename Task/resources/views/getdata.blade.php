@extends('layouts.adminpanel')

@section('content')
@if(count($search) > 0)
    <h1>products Data</h1>
    <a href="/" class="btn btn-primary" style="width: 200px"><span style="font-size: x-large">Back</span></a><br><br>
    <div class="box-body col-md-12">
        <table class="table table-bordered table-hover   box box-primary">
            <thead>
            <tr>
                <th>product Name</th>
                <th>product Description</th>
                <th>product Price</th>
                <th>product count</th>
                <th>product Time</th>
            </tr>
            </thead>
            @foreach($search as $search)
                <tbody>
                <tr>
                    <td>{{$search->pro_name}}</td>
                    <td>{{$search->description}}</td>
                    <td>{{$search->price}}</td>
                    <td>{{$search->count}}</td>
                    <td>{{$search->created_at}}</td>
                   </tr>
                <tbody>
            @endforeach
        </table>
    </div>
  @elseif(count($data) > 0)
    <h1>products and supplayers  Data</h1>
    <a href="/" class="btn btn-primary" style="width: 200px"><span style="font-size: x-large">Back</span></a><br><br>
    <div class="box-body col-md-12">
        <table class="table table-bordered table-hover   box box-primary">
            <thead>
            <tr>
                <th>product Name</th>
                <th>product Description</th>
                <th>product Price</th>
                <th>Supplayer Name</th>
                <th>Supplayer Address</th>
                <th>product buyer</th>
                <th>total price</th>
                <th>buy Time</th>
            </tr>
            </thead>
            @foreach($data as $data)
                <tbody>
                <tr>
                    <td>{{$data->pro_name}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->sup_name}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->product_count}}</td>
                    <td>{{$data->price * $data->product_count}}</td>
                    <td>{{$data->created_at}}</td>
                </tr>
                <tbody>
            @endforeach
        </table>
    </div>
@elseif(count($clients) > 0)
    <h1>Clients  Data</h1>
    <a href="/" class="btn btn-primary" style="width: 200px"><span style="font-size: x-large">Back</span></a><br><br>
    <div class="box-body col-md-12">
        <table class="table table-bordered table-hover   box box-primary">
            <thead>
            <tr>
                <th>Client Name</th>
                <th>Client Address</th>
                <th>product Name</th>
                <th>product Buyer count</th>
                <th>Product Price for unit</th>
                <th>Total Price</th>
                <th>buy Time</th>
            </tr>
            </thead>
            @foreach($clients as $client)
                <tbody>
                <tr>
                    <td>{{$client->client_name}}</td>
                    <td>{{$client->address}}</td>
                    <td>{{$client->pro_name}}</td>
                    <td>{{$client->client_count}}</td>
                    <td>{{$client->price_unit}}</td>
                    <td>{{$client->client_count * $client->price_unit }}</td>
                    <td>{{$client->created_at}}</td>
                </tr>
                <tbody>
            @endforeach
        </table>

    </div>
    @else

    <a href="/" class="btn btn-primary" style="width: 200px"><span style="font-size: x-large">Back</span></a><br><br>
    <h1 align="center">no data in this time</h1>
@endif
@stop