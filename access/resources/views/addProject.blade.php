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
    <h3>Add Project</h3>
    <div style="width: 100%">
        <form style="width: 100%"  action="storeProject" method="post" enctype="multipart/form-data"  class="box-header with-border box box-primary container col-md-12">
            {{csrf_field()}}
            <div style="width: 50%" class="  col-md-6">
                <div class="form-group">
                    <label style="font-size: large">Project Name</label><br>
                    <input class="form-control" type="text" name="name_en">
                </div>
                <div class="form-group">
                    <label style="font-size: large">Project Mini Content</label><br>
                    <textarea class="form-control" rows="7" name="miniDetail_en"></textarea>
                </div>
                <div class="form-group">
                    <label style="font-size: large">Project Details</label><br>
                    <textarea class="form-control" rows="7" name="detail_en"></textarea>
                </div>

            </div>
            <div style="width: 50%" class="  col-md-6">
                <div class="form-group">
                    <label style="float: right;font-size: large">اسم المشروع</label><br>
                    <input class="form-control" type="text" name="name_ar">
                </div>
                <div class="form-group">
                    <label style="float: right;font-size: large">تفصيل مختصر عن المشروع</label><br>
                    <textarea class="form-control" rows="7" name="miniDetail_ar"></textarea>
                </div>
                <div class="form-group">
                    <label style="float: right;font-size: large">تفصيل المشروع</label><br>
                    <textarea class="form-control" rows="7" name="detail_ar"></textarea>
                </div>

            </div>
            <br>
            <div class="form-group">
                <label style="font-size: large">Upload Project Carousel Pictures</label><br>
                <input  type="file"   name="sliderimage[]" multiple>
            </div>
            <div class="form-group">
                <label style="font-size: large">Upload Project Picture</label><br>
                <input  type="file" name="image">
            </div>
            <br>
            <div class="form-group">
                <label style="font-size: xx-large">choose project type</label><br>
                <label class="blue-radio">Finished Project
                    <input type="radio" checked="checked" name="project" value="1">
                    <span class="checkmark"></span>
                </label>
                <label class="blue-radio">Current Project
                    <input type="radio" name="project" value="2">
                    <span class="checkmark"></span>
                </label>
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


    </Div>
@stop
