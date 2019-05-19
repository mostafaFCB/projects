@extends('layouts.adminpanel')
@section('active5')
    active
@stop

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block" align="center">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <h3>Setting</h3>
    <form style="width: 100%" action="{{route('setting.update',$setting->id)}}" method="post" enctype="multipart/form-data" class="box-header with-border box box-primary container col-md-12" >
    {{csrf_field()}}
        <div style="width: 50%" class="  col-md-6">
            <div class="form-group">
                <label style="font-size: x-large">Website Name</label><br>
                <input class="form-control" type="text" name="web_name_en" value="{{$en_setting->web_name}}">
            </div>
            <div class="form-group">
                <label style="font-size: x-large">About US Details</label><br>
                <textarea class="form-control" type="text" name="aboutUs_en" rows="5">{{$en_setting->aboutus_detail}}</textarea>
            </div>

            <div class="form-group">
                <label for="image" style="font-size: x-large">Logo</label><br>
                <input  type="file" name="image" id="image">
            </div>
            <div>
                <label for="image"><img  src="{{url('storage/',$setting->image)}}" alt="" class="thumbnail img-responsive" width="100"></label>
            </div>

            <div class="form-group">
                <label style="font-size: x-large">FaceBook</label><br>
                <input class="form-control" type="text"  name="facebook" value="{{$setting->facebook}}">
            </div>
            <div class="form-group">
                <label style="font-size: x-large">Twitter</label><br>
                <input class="form-control" name="twitter" value="{{$setting->twitter}}">
            </div>
            <div class="form-group">
                <label style="font-size: x-large">Instagram</label><br>
                <input class="form-control"  name="instegram" value="{{$setting->instegram}}" >
            </div>
            <div class="form-group">
                <label style="font-size: x-large">Google Map</label><br>
                <input class="form-control"  name="googleMap" value="{{$setting->google_map}}" >
            </div>
            <div class="form-group">
                <label style="font-size: x-large">What's app</label><br>
                <input class="form-control"  name="whatisapp" value="{{$setting->whatisapp}}" >
            </div>
        </div>

        <div style="width: 50%" class="  col-md-6">
            <div class="form-group">
                <label style="float: right;font-size: x-large">اسم الموقع</label><br>
                <input class="form-control" type="text" name="web_name_ar" value="{{$ar_setting->web_name}}">
            </div>
            <div class="form-group">
                <label style="float: right;font-size: x-large">من نحن</label><br>
                <textarea class="form-control" type="text" name="aboutUs_ar" rows="5">{{$ar_setting->aboutus_detail}}</textarea>
            </div>
        </div>
        <div class="col-md-12"><br>
            <button style="font-size: large"  type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    @stop