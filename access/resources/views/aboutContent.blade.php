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
    <div class="container col-md-12">
        <div class="box-header">
            <h1>About Content Data</h1>
        </div>
        <a href="addAboutContent" class="btn btn-primary" style="width: 300px"><span style="font-size: x-large"> + Add AboutUs</span></a><br><br>
        <div align="center">
            <a href="{{Route('export.aboutus')}}" class="btn btn-success">Export To Excel</a>
        </div>
        <div class="box-body">
        <table id="example2" class="table table-bordered table-hover box box-primary col-md-12" role="grid" aria-describedby="example1_info">
            <thead>
                <tr>
                    <th style="font-size: large">Name</th>
                    <th style="font-size: large">Picture</th>
                    <th style="font-size: large">Content</th>
                    <th style="font-size: large">Status</th>
                </tr>
            </thead>
           @if($aboutuscontent ==[])
                <div style="font-size: x-large;position: absolute;top: 50%;left: 10%;z-index: 99999;right: 0;text-align: center;"> don't have any data </div>
            @else
            @foreach($aboutuscontent as $aboutuscontent)
            <tbody>
                <tr>

                    <td>{{$aboutuscontent->name}}</td>
                    <td><img class="img-thumbnail" style="width: 100px" src="{{url('storage/' .$aboutuscontent->image)}}" alt=""></td>
                    <td>{{$aboutuscontent->detail}}</td>
                    @if($aboutuscontent->status ==1)
                        <td>
                            <div class="" style="width:80px;height: 20px;background-color: green" align="center">
                                <label style="padding-bottom: 100px;color: white"  for="">Active</label>
                            </div>
                        </td>
                    @elseif($aboutuscontent->status ==2)
                        <td>

                            <div class="" style="height: 20px;background-color: red" align="center">
                                <label style="padding-bottom: 100px;color: white"  for=""> DeActive</label>
                            </div>
                        </td>
                    @endif
                    <td class="col-md-1">
                        <a class="btn btn-danger glyphicon glyphicon-trash col-md-6" onclick="return confirm('Are you sure?')" href="/deleteAboutContent/{{$aboutuscontent->id}}/delete"></a>
                        <a class="glyphicon glyphicon-edit btn btn-success col-md-6" href="aboutContent/{{$aboutuscontent->id}}/editAboutContent"></a></td>

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
