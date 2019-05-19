@extends('layouts.adminpanel')
@section('active7')
    active
@stop
@section('content')


    <h3>Edit Adress</h3>

    <form style="width: 100%" action="{{route('address.update',$address->id)}}" method="post" enctype="multipart/form-data" class="container col-md-12" >
    <div class="box-header with-border box box-primary col-md-6" style="width: 49%;float:left">
        {{csrf_field()}}
            <div class="form-group">
                <label style="font-size: x-large">Brunch Name</label><br>
                <input class="form-control" type="text" name="brunch_en" value="{{$en_address->brunch}}">
            </div>
            <div class="form-group">
                <label style="font-size: x-large">Adress Detail</label><br>
                <textarea name="address_en" class="form-control" rows="10">{{$en_address->address}}</textarea>
            </div>

    </div>
        <div style="width: 49%;float:right" class="box-header with-border box box-primary container col-md-6" >
            <div class="form-group">
                <label style="float: right;font-size: x-large"><span dir="ltr">عنوان الشركه</span></label><br>
                <input class="form-control" type="text" name="brunch_ar" value="{{$ar_address->brunch}}">
            </div>
            <div class="form-group">
                <label style="float: right;font-size: x-large">تفصيل العنوان</label><br>
                <textarea class="form-control"   rows="10" name="address_ar">{{$ar_address->address}}</textarea>
            </div>

        </div>
        <div class="form-group col-md-12">
            <label style="font-size: x-large">Phones</label><br>
            <input name="phone" class="form-control" value="{{$address->phone}}" style="width: 50%">
        </div>
        <div class="form-group col-md-12">
            <label style="font-size: xx-large">Status</label><br>
            <label class="blue-radio">Active
                <input type="radio" name="active" value="1" @if($address->status ==1) @echo checked="checked" @endif >
                <span class="checkmark"></span>
            </label>
            <label class="blue-radio">Not Active
                <input type="radio" name="active" value="2" @if($address->status ==2) @echo checked="checked" @endif>
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="col-md-12"><br>
            <button style="font-size: large"  type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

@stop
