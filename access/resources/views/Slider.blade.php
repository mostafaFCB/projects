@extends('layouts.adminpanel')

@section('active1')
    active
@stop
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success " align="center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="box-body container-fluid">
        <div class="box-header">
            <h2>Slider Data</h2>
        </div>
        <a href="addSlider" class="btn btn-primary" style="width: 200px"><span style="font-size: x-large"> + Add Slider</span></a><br><br>

        <div align="center">
            <a href="{{Route('export.slider')}}" class="btn btn-success">Export To Excel</a>
        </div>

    <div class="box-body">
            <table id="example2" class="table table-bordered table-hover box box-primary" role="grid" aria-describedby="example1_info" >

                <thead>
                <tr role="row">
                    <th style="font-size: large">Name</th>
                    <th style="font-size: large">Picture</th>
                    <th style="font-size: large">Content</th>
                    <th style="font-size: large">Status</th>
                </tr>
                </thead>
                @if($slider ==[])
                    <div style="font-size: x-large;position: absolute;top: 50%;left: 10%;z-index: 99999;right: 0;text-align: center;"> don't have any data </div>
                @else
                @foreach($slider as $slider)
                    <tbody>
                            <tr role="row" class="odd">
                                <td>{{$slider->name}}</td>
                                <td><img class="img-thumbnail" style="width: 100px" src="{{url('storage/' .$slider->image)}}" alt=""></td>
                                <td>{{$slider->detail}}</td>
                                @if($slider->status ==1)
                                    <td>
                                        <div class="" style="width:80px;height: 20px;background-color: green" align="center">
                                            <label style="padding-bottom: 100px;color: white"  for="">Active</label>
                                        </div>
                                    </td>
                                @elseif($slider->status ==2)
                                    <td>

                                        <div class="" style="height: 20px;background-color: red" align="center">
                                            <label style="padding-bottom: 100px;color: white"  for=""> DeActive</label>
                                        </div>
                                    </td>
                                @endif
                                <td ><a class="btn btn-danger glyphicon glyphicon-trash col-md-6" onclick="return confirm('Are you sure?')" href="/deleteSlider/{{$slider->id}}"></a>
                                    <a class="glyphicon glyphicon-edit btn btn-success col-md-6"  href="/editSlider/{{$slider->id}}"></a></td>
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
        <div class="row">
            <div class="col-sm-5">
                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing {{$slider_count}} of  entries</div>
            </div>

        </div>
    </div>

@stop
