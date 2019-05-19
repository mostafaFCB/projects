@extends('layouts.adminpanel')
@section('active1')
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
    <h3>Add Counter</h3>
    <form style="width: 100%" action="CounterStore" method="post" enctype="multipart/form-data"  class="box-header with-border box box-primary container col-md-12">
        {{csrf_field()}}
        <div style="width: 50%" class="  col-md-6">
            <div class="form-group">
                <label style="font-size: x-large">Counter Name</label><br>
                <input class="form-control" type="text" name="name_en" >
            </div>
            <div class="form-group">
                <label style="font-size: x-large">Counter Content</label><br>
                <input class="form-control" type="text" name="counter" >
            </div>
            <div class="form-group">
                <label style="font-size: x-large">Upload Pic</label><br>
                <input  type="file"  name="uploadFile[]" id="uploadFile">
            </div>
            <label for="uploadFile"><div  id="image_preview"></div></label>
        </div>
        <div style="width: 50%" class="col-md-6">
            <div class="form-group">
                <label style="float: right;font-size: x-large"><span>عنوان العداد</span></label><br>
                <input class="form-control" type="text" name="name_ar" >
            </div>
        </div>
        <div class="form-group col-md-12">
            <label style="font-size: xx-large">Status</label><br>
            <label class="blue-radio">Active
                <input type="radio" checked="checked" name="active" value="1">
                <span class="checkmark"></span>
            </label>
            <label class="blue-radio">Not Active
                <input type="radio" name="active" value="2">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="col-md-12"><br>
            <button style="font-size: large"  type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@stop
