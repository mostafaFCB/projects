@extends('layouts.adminpanel')

@section('content')


    <h3>Edit Slider</h3>

        {{--@for(i=0 ; i < $id ;i++)--}}
    <form style="width: 100%" action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data" class="box-header with-border box box-primary container col-md-12">
        {{csrf_field()}}
        <div style="width: 50%" class="  col-md-6">
            <div class="form-group">
                <label style="font-size: x-large">Slide Name</label><br>
                <input class="form-control" type="text" name="name_en" value="{{$en_slider[$key]->name}}">
            </div>
            <div class="form-group">
                <label style="font-size: x-large">Slide Content</label><br>
                <textarea class="form-control" type="text" name="detail_en" rows="10"> {{$en_slider[$key]->detail}}</textarea>
            </div>
            <div class="form-group" >
                <label style="font-size: x-large">Upload Picture</label><br>

            </div>
            <input class="form-control" type="file" name="image" id="image" style="display: none">
            <div>
                <label for="image"><img style="border-radius: 50%;width:100px ; height: 100px;" src="{{url('storage/',$slider->image)}}" alt="" class="thumbnail img-responsive" ></label>
            </div>
        </div>
        <div style="width: 50%" class="col-md-6">
            <div class="form-group">
                <label style="float: right;font-size: x-large"><span dir="ltr">عنوان سلايدر</span></label><br>
                <input class="form-control" type="text" name="name_ar" value="{{$ar_slider[$key]->name}}">
            </div>
            <div class="form-group">
                <label style="float: right;font-size: x-large">محتوى سلايدر</label><br>
                <textarea class="form-control"   rows="10" name="detail_ar">{{$ar_slider[$key]->detail}}</textarea>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label style="font-size: xx-large">Status</label><br>
            <label class="blue-radio">Active
                <input type="radio" name="active" value="1" @if($slider->status ==1) @echo checked="checked" @endif >
                <span class="checkmark"></span>
            </label>
            <label class="blue-radio">Not Active
                <input type="radio" name="active" value="2" @if($slider->status ==2) @echo checked="checked" @endif>
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="col-md-12"><br>
            <button style="font-size: large"  type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@stop
