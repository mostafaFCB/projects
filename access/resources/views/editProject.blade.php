@extends('layouts.adminpanel')
@section('active8')
    active
@stop
@section('content')
    <h3>Edit Project</h3>
    <div style="width: 100%">
        <form style="width: 100%"  action="{{route('project.update',$project->id)}}" method="post" enctype="multipart/form-data"  class="box-header with-border box box-primary container col-md-12">
            {{csrf_field()}}
            <div style="width: 50%" class="  col-md-6">
                <div class="form-group">
                    <label style="font-size: large">Project Name</label><br>
                    <input class="form-control" type="text" name="name_en" value="{{$en_project->name}}">
                </div>
                <div class="form-group">
                    <label style="font-size: large">Project Mini Content</label><br>
                    <textarea class="form-control" rows="7" name="miniDetail_en">{{$en_project->mini_detail}}</textarea>
                </div>
                <div class="form-group">
                    <label style="font-size: large">Project Details</label><br>
                    <textarea class="form-control" rows="7" name="detail_en">{{$en_project->detail}}</textarea>
                </div>

            </div>
            <div style="width: 50%" class="  col-md-6">
                <div class="form-group">
                    <label style="float: right;font-size: large">اسم المشروع</label><br>
                    <input class="form-control" type="text" name="name_ar" value="{{$ar_project->name}}">
                </div>
                <div class="form-group">
                    <label style="float: right;font-size: large">تفصيل مختصر عن المشروع</label><br>
                    <textarea class="form-control" rows="7" name="miniDetail_ar"> {{$ar_project->mini_detail}}</textarea>
                </div>
                <div class="form-group">
                    <label style="float: right;font-size: large">تفصيل المشروع</label><br>
                    <textarea class="form-control" rows="7" name="detail_ar">{{$ar_project->detail}}</textarea>
                </div>

            </div>
            <br>

            <div class="form-group" >
                <label style="font-size: large">Upload Project Carousel Pictures</label><br>
            </div>
            <input  type="file"  multiple="yes" name="sliderimage" id="c" style="display: none">
            <div>
                <label for="c"><img style="border-radius: 50%" src="{{url('storage/',$project->slider_image)}}" alt="" class="thumbnail img-responsive" width="200"></label>
            </div>
            <div class="form-group">
                <label style="font-size: large">Upload Project Picture</label><br>
            </div>
            <input  type="file" name="image" id="a" style="display: none">
            <div>
                <label for="a"> <img style="border-radius: 50%" src="{{url('storage/',$project->image)}}" alt="" class="thumbnail img-responsive" width="200"></label>
            </div>
            <br>

            <div class="form-group">
                <label style="font-size: xx-large">choose project type</label><br>
                <label class="blue-radio">Finished Project

                    <input type="radio" @if($project->type ==1) @echo checked="checked" @endif name="project" value="1">
                    <span class="checkmark"></span>
                </label>
                <label class="blue-radio">Current Project
                    <input type="radio" name="project" value="2" @if($project->type ==2) @echo checked="checked" @endif>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div>
                @if($project->type ==1)
                    <label for="" style="font-size: x-large">it now Finished project</label>
                @elseif($project->type ==2)
                    <label for="" style="font-size: x-large">it now Current project</label>
                @endif
            </div>
            <div class="form-group col-md-12">
                <label style="font-size: xx-large">Status</label><br>
                <label class="blue-radio">Active
                    <input type="radio" name="active" value="1" @if($project->status ==1) @echo checked="checked" @endif >
                    <span class="checkmark"></span>
                </label>
                <label class="blue-radio">Not Active
                    <input type="radio" name="active" value="2" @if($project->status ==2) @echo checked="checked" @endif>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="col-md-12"><br>
                <button style="font-size: large"  type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>


    </Div>
@stop
