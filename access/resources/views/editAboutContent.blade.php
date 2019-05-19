@extends('layouts.adminpanel')
@section('active4')
    active
@stop
@section('content')
    <h3>Edit About Us Content</h3>
    <form style="width: 100%" action="{{route('aboutContent.update',$aboutuscontent->id)}}" method="post" enctype="multipart/form-data" class="box-header with-border box box-primary container col-md-12">
        {{csrf_field()}}
        <div style="width: 50%" class="  col-md-6">
            <div class="form-group">
                <label style="font-size: x-large">AboutUs Name</label><br>
                <input class="form-control" type="text" name="name_en" value="{{$en_aboutuscontent->name}}">
            </div>
            <div class="form-group">
                <label style="font-size: x-large">AboutUs Content</label><br>
                <textarea class="form-control" type="text" name="detail_en" rows="10">{{$en_aboutuscontent->detail}} </textarea>
            </div>
            <div class="form-group" >
                <label style="font-size: x-large">Upload Pic</label><br>

            </div>
            <input class="form-control" type="file" name="image" id="image" style="display: none">
            <div>
                <label for="image"><img style="border-radius: 50%" src="{{url('storage/',$aboutuscontent->image)}}" alt="" class="thumbnail img-responsive" width="200"></label>
            </div>
        </div>
        <div style="width: 50%" class="col-md-6">
            <div class="form-group">
                <label style="float: right;font-size: x-large"><span dir="ltr">عنوان عن من نحن</span></label><br>
                <input class="form-control" type="text" name="name_ar" value="{{$ar_aboutuscontent->name}}">
            </div>
            <div class="form-group">
                <label style="float: right;font-size: x-large">محتوى عن من نحن</label><br>
                <textarea class="form-control"   rows="10" name="detail_ar">{{$ar_aboutuscontent->detail}}</textarea>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label style="font-size: xx-large">Status</label><br>
            <label class="blue-radio">Active
                <input type="radio" name="active" value="1" @if($aboutuscontent->status ==1) @echo checked="checked" @endif >
                <span class="checkmark"></span>
            </label>
            <label class="blue-radio">Not Active
                <input type="radio" name="active" value="2" @if($aboutuscontent->status ==2) @echo checked="checked" @endif>
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="col-md-12"><br>
            <button style="font-size: large"  type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@stop