@extends('layouts.adminpanel')

@section('content')
    <h3>Edit Counter</h3>
    <form style="width: 100%" action="{{route('counter.update',$counter->id)}}" method="post" enctype="multipart/form-data" class="box-header with-border box box-primary container col-md-12">
        {{csrf_field()}}
        <div style="width: 50%" class="  col-md-6">
            <div class="form-group">
                <label style="font-size: x-large">Counter Name</label><br>
                <input class="form-control" type="text" name="name_en" value="{{$en_counter[$key]->name}}">
            </div>
            <div class="form-group">
                <label style="font-size: x-large">Counter Content</label><br>
                <input class="form-control" type="text" name="counter" value="{{$counter->counter}}">
            </div>
            <div class="form-group" >
                <label style="font-size: x-large">Upload Picture</label><br>

            </div>
            <input class="form-control" type="file" name="image" id="image" style="display: none">
            <div>
                <label for="image"><img style="border-radius: 50%" src="{{url('storage/',$counter->image)}}" alt="" class="thumbnail img-responsive" width="200"></label>
            </div>
        </div>
        <div style="width: 50%" class="col-md-6">
            <div class="form-group">
                <label style="float: right;font-size: x-large"><span>عنوان العداد</span></label><br>
                <input class="form-control" type="text" name="name_ar" value="{{$ar_counter[$key]->name}}">
            </div>
        </div>
        <div class="form-group col-md-12">
            <label style="font-size: xx-large">Status</label><br>
            <label class="blue-radio">Active
                <input type="radio" name="active" value="1" @if($counter->status ==1) @echo checked="checked" @endif >
                <span class="checkmark"></span>
            </label>
            <label class="blue-radio">Not Active
                <input type="radio" name="active" value="2" @if($counter->status ==2) @echo checked="checked" @endif>
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="col-md-12"><br>
            <button style="font-size: large"  type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@stop
