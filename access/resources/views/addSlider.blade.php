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
    <h3>Add Slider</h3>

        <form style="width: 100%" action="sliderStore" method="post" enctype="multipart/form-data"  class="box-header with-border box box-primary container col-md-12">
                 {{csrf_field()}}
                <div style="width: 50%" class="  col-md-6">
                        <div class="form-group">
                            <label  style="font-size: x-large">Slide Name</label><br>
                            <input class="form-control" type="text" name="name_en" >
                        </div>
                        <div class="form-group">
                            <label style="font-size: x-large">Slide Content</label><br>
                            <textarea class="form-control"   rows="10" name="detail_en"></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-size: x-large">Upload Pic</label><br>
                            <input  type="file"  name="uploadFile[]" id="uploadFile">
                        </div>
                    <label for="uploadFile"><div  id="image_preview"></div></label>
                </div>

                <div style="width: 50%" class="col-md-6">
                            <div class="form-group">
                                <label style="float: right;font-size: x-large"><span dir="ltr">عنوان سلايدر</span></label><br>
                                <input class="form-control" type="text" name="name_ar" >
                            </div>
                            <div class="form-group">
                                <label style="float: right;font-size: x-large">محتوى سلايدر</label><br>
                                <textarea class="form-control"   rows="10" name="detail_ar"></textarea>
                            </div>
                </div>
            <div class="form-group col-md-12" >
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
                <!-- /.box-body -->
            </form>







    @stop
