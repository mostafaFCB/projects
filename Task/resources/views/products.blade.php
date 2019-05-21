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
        <h1>products Data</h1>

    </div>
    <a href="addproduct" class="btn btn-primary" style="width: 200px"><span style="font-size: x-large"> + Add product</span></a><br><br>
    @if(count($product) > 0)
    <div align="center">
        <a href="{{Route('export.pro')}}" class="btn btn-success">Export To Excel</a>
    </div>
    <div class="box-body col-md-12">
        <table class="table table-bordered table-hover   box box-primary">
            <thead>
            <tr>
                <th>product Name</th>
                <th>product Description</th>
                <th>product Picture</th>
                <th>product Price</th>
                <th>product count</th>
                <th>Total Price</th>
                <th>Status</th>
            </tr>
            </thead>

                @foreach($product as $product)
                    <tbody>
                    <tr>
                        <td>{{$product->pro_name}}</td>
                        <td>{{$product->description}}</td>
                        <td><img class="img-thumbnail" style="width: 100px;height: 100px" src="{{url('storage/'.$product->image)}}" alt=""></td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->count}}</td>
                        <td>{{$product->count * $product->price}}</td>
                        @if($product->status ==2)
                            <td>
                                <div class="" style="width:80px;height: 20px;background-color: green" align="center">
                                    <label style="padding-bottom: 100px;color: white"  for="">Active</label>
                                </div>
                            </td>
                        @elseif($product->status ==1)
                            <td>
                                <div class="" style="height: 20px;background-color: red" align="center">
                                    <label style="padding-bottom: 100px;color: white"  for=""> DeActive</label>
                                </div>
                            </td>
                        @endif

                        <td class="col-md-1"><a class="btn btn-danger  col-md-6" onclick="return confirm('Are you sure?')" href="/deleteProduct/{{$product->id}}"><i class="fa fa-trash"></i></a>
                            <a class=" btn btn-success col-md-6" href="/products/{{$product->id}}/edit"><i class="fa fa-edit"></i></a></td>
                    </tr>
                    <tbody>
                    @endforeach

        </table>
    </div>
    @else
        <div style="font-size: xx-large;position: absolute;top: 50%;left: 10%;z-index: 99999;right: 0;text-align: center;"> don't have any data </div>
    @endif
</div>

@stop
