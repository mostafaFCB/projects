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
            <h1>Supplayers Data</h1>

        </div>
        <a href="addsupplayer" class="btn btn-primary" style="width: 200px"><span style="font-size: x-large"> + Add Supplayer</span></a><br><br>
        @if(count($supplayers) > 0 )
            <div align="center">
                <a href="{{Route('export.sup')}}" class="btn btn-success">Export To Excel</a>
            </div>
            <div class="box-body col-md-12">
                <table class="table table-bordered table-hover   box box-primary">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>supplayer Name</th>
                        <th>supplayer Address</th>
                        <th>Product Count</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    @foreach($supplayers as $supplayer)
                        <tbody>
                        <tr>
                            <td>{{$supplayer->id}}</td>
                            <td>{{$supplayer->sup_name}}</td>
                            <td>{{$supplayer->address}}</td>
                            <td>{{$supplayer->pro_count}}</td>
                            @if($supplayer->status ==2)
                                <td>
                                    <div class="" style="width:80px;height: 20px;background-color: green" align="center">
                                        <label style="padding-bottom: 100px;color: white"  for="">Active</label>
                                    </div>
                                </td>
                            @elseif($supplayer->status ==1)
                                <td>
                                    <div class="" style="height: 20px;background-color: red" align="center">
                                        <label style="padding-bottom: 100px;color: white"  for=""> DeActive</label>
                                    </div>
                                </td>
                            @endif
                            <td class="col-md-1"><a class="btn btn-danger col-md-6" onclick="return confirm('Are you sure?')"  href="/deletesupplayer/{{$supplayer->id}}"><i class="fa fa-trash"></i></a>
                                <a class=" btn btn-success col-md-6" href="/supplayers/{{$supplayer->id}}/edit"><i class="fa fa-edit"></i></a></td>
                        </tr>
                        <tbody>
                        @endforeach

                </table>
                <div class="text-center">
                    {{ $supplayers->links()}}
                </div>
            </div>
            @else
                <div > <p style="font-size: xx-large;text-align: center;margin-top: 2000px">don't have any data </p></div>
            @endif
    </div>

@stop
