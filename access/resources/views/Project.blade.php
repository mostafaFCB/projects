@extends('layouts.adminpanel')
@section('active1')
    active
@stop
@section('content')
    <div class="container col-md-12">
        <div class="box-header">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block" align="center">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <h1>Project Data</h1>
        </div>
        <a href="addProject" class="btn btn-primary" style="width: 200px"><span style="font-size: x-large"> + Add Project</span></a><br><br>
        <div align="center">
            <a href="{{Route('export.project')}}" class="btn btn-success">Export To Excel</a>
        </div>
        <div class="box-body">
        <table class="table table-bordered table-hover   box box-primary">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Project Mini Content</th>
                    <th>Project Picture</th>
                    <th>Project Details</th>
                    <th>Project Carousel Pictures</th>
                    <th>Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            @if($project ==[])
                <div style="font-size: x-large;position: absolute;top: 50%;left: 10%;z-index: 99999;right: 0;text-align: center;"> don't have any data </div>
            @else
            @foreach($project as $project)
            <tbody>
                <tr>
                    <td>{{$project->name}}</td>
                    <td>{{$project->mini_detail}}</td>
                    <td><img class="img-thumbnail" style="width: 100px" src="{{url('storage/' .$project->image)}}" alt=""></td>
                    <td>{{$project->detail}}</td>
                    <td><img class="img-thumbnail" style="width: 100px" src="{{url('storage/' .$project->slider_image)}}" alt=""></td>
                    @if($project->type ==1)
                    <td>Finished project</td>
                    @elseif($project->type ==2)
                    <td>Current project</td>
                    @endif
                    @if($project->status ==1)
                        <td>
                            <div class="" style="width:80px;height: 20px;background-color: green" align="center">
                                <label style="padding-bottom: 100px;color: white"  for="">Active</label>
                            </div>
                        </td>
                    @elseif($project->status ==2)
                        <td>

                            <div class="" style="height: 20px;background-color: red" align="center">
                                <label style="padding-bottom: 100px;color: white"  for=""> DeActive</label>
                            </div>
                        </td>
                    @endif

                    <td class="col-md-1"><a class="btn btn-danger glyphicon glyphicon-trash col-md-6" onclick="return confirm('Are you sure?')" href="/deleteProject/{{$project->id}}"></a>
                        <a class="glyphicon glyphicon-edit btn btn-success col-md-6" href="/project/{{$project->id}}/edit"></a></td>
                </tr>
            <tbody>
            @endforeach

            @endif
        </table>
    </div>
    </div>

@stop
