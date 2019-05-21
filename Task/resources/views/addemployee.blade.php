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
    <h3>Add Employee</h3>
    <div style="width: 100%">
        <form style="width: 100%"  action="employeeStore" method="post" enctype="multipart/form-data"  class="box-header with-border box box-primary container col-md-12">
            {{csrf_field()}}
            <div style="width: 50%" class="col-md-12">
                <div class="form-group">
                    <label style="font-size: large">Employee Name</label><br>
                    <input class="form-control" type="text" name="name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label style="font-size: large">Employee Address</label><br>
                    <textarea class="form-control" rows="7" name="address">{{old('address')}}</textarea>
                </div>

                <br>
                <div class="form-group col-md-12">
                    <label style="font-size: xx-large">Status</label><br>
                    <label class="blue-radio">Active
                        <input type="radio" checked="checked" name="active" value="2">
                        <span class="checkmark"></span>
                    </label>
                    <label class="blue-radio">Not Active
                        <input type="radio" name="active" value="1">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-md-12"><br>
                    <button style="font-size: large"  type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>


    </Div>
@stop
