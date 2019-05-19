@extends('layouts.adminpanel')
@section('active7')
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
    <h3>Add Adress</h3>
    <form style="width: 100%" action="AddressStore" method="post" enctype="multipart/form-data" class="box-header with-border box box-primary container col-md-12">
        {{csrf_field()}}
        <div style="width: 50%" class="  col-md-6">
            <div class="form-group">
                <label style="font-size: x-large">Brunch Name</label><br>
                <input class="form-control" type="text" name="brunch_en">
            </div>
            <div class="form-group">
                <label style="font-size: x-large">Adress Detail</label><br>
                <textarea name="address_en" class="form-control" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label style="font-size: x-large">Phones</label><br>
                <input name="phone" class="form-control" placeholder="111111 - 1111111 - 11111">
            </div>
        </div>
        <div style="width: 50%" class="col-md-6">
            <div class="form-group">
                <label style="float: right;font-size: x-large"><span dir="ltr">عنوان الشركه</span></label><br>
                <input class="form-control" type="text" name="brunch_ar" >
            </div>
            <div class="form-group">
                <label style="float: right;font-size: x-large">تفصيل العنوان</label><br>
                <textarea class="form-control"   rows="10" name="address_ar"></textarea>
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
