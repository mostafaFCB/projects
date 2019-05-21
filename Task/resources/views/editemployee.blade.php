@extends('layouts.adminpanel')
@section('active8')
    active
@stop
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h3>Edit Employee</h3>
    <div style="width: 100%">
        <form style="width: 100%"  action="{{Route('employee.update',$employee->id)}}" method="post" enctype="multipart/form-data"  class="box-header with-border box box-primary container col-md-12">
            {{csrf_field()}}
            <div style="width: 50%" class="col-md-12">
                <div class="form-group">
                    <label style="font-size: large">Employee Name</label><br>
                    <input class="form-control" type="text" name="name" value="{{$employee->name}}">
                </div>
                <div class="form-group">
                    <label style="font-size: large">Employee Address</label><br>
                    <textarea class="form-control" rows="7" name="address">{{$employee->address}}</textarea>
                </div>
            </div>
            <br>

            <br>
            <div class="form-group col-md-12">
                <label style="font-size: xx-large">Status</label><br>
                <label class="blue-radio">Active
                    <input type="radio" name="active" value="2" @if($employee->status ==2) @echo checked="checked" @endif >
                    <span class="checkmark"></span>
                </label>
                <label class="blue-radio">Not Active
                    <input type="radio" name="active" value="1" @if($employee->status ==1) @echo checked="checked" @endif>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="col-md-12"><br>
                <button style="font-size: large"  type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>


    </Div>
@stop
