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
    <div class="box-body container-fluid">
        <div class="box-header">
            <h2>Counter Data</h2>
        </div>
        <a href="addCounter" class="btn btn-primary" style="width: 200px"><span style="font-size: x-large"> + Add Counter</span></a><br><br>
        <div align="center">
            <a href="{{Route('export.counter')}}" class="btn btn-success">Export To Excel</a>
        </div>
        <div class="box-body">
        <table class="table table-bordered table-hover   box box-primary">

            <thead>
                <tr>
                    <th style="font-size: large">Name</th>
                    <th style="font-size: large">Picture</th>
                    <th style="font-size: large">Content</th>
                    <th style="font-size: large">Status</th>
                </tr>
            </thead>
            @if($counter ==[])
                <div style="font-size: x-large;position: absolute;top: 50%;left: 10%;z-index: 99999;right: 0;text-align: center;"> don't have any data </div>
            @else
                @foreach($counter as $counter)
            <tbody>
                <tr>
                    <td style="font-size: large">{{$counter->name}}</td>
                    <td><img class="img-thumbnail" style="width: 100px" src="{{url('storage/' .$counter->image)}}" alt="ss"></td>
                    <td style="font-size: large">{{$counter->counter}}</td>
                    @if($counter->status ==1)
                        <td>
                            <div class="" style="width:80px;height: 20px;background-color: green" align="center">
                                <label style="padding-bottom: 100px;color: white"  for="">Active</label>
                            </div>
                        </td>
                    @elseif($counter->status ==2)
                        <td>

                            <div class="" style="height: 20px;background-color: red" align="center">
                                <label style="padding-bottom: 100px;color: white"  for=""> DeActive</label>
                            </div>
                        </td>
                    @endif
                    <td><a class="btn btn-danger glyphicon glyphicon-trash col-md-6" onclick="return confirm('Are you sure?')" href="/deleteCounter/{{$counter->id}}">Delete</a>
                        <a class="glyphicon glyphicon-edit btn btn-success col-md-6" href="/editCounter/{{$counter->id}}"></a></td>
                </tr>
            </tbody>
                @endforeach

            <tfoot>
                <tr>
                    <th style="font-size: large">Name</th>
                    <th style="font-size: large">Picture</th>
                    <th style="font-size: large">Content</th>
                    <th style="font-size: large">Status</th>
                </tr>
            </tfoot>
            @endif
        </table>
</div>
    </div>

@stop
