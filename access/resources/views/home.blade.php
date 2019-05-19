@extends('layouts.adminpanel')

@section('active1')
    active
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <a href="{{url('/addSlider')}}">
                <div class="stats st-sliders">
                    <i class="fa fa-arrow-right"></i>
                    <div class="style">
                        Add Slider
                        <span>{{$slider_count}}</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{url('/addCounter')}}">
                <div class="stats st-counter">
                    <i class="fa fa-list-ol"></i>
                    <div class="style">
                        Add Counter
                        <span>{{$counter_count}}</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{url('/addAboutContent')}}">
                <div class="stats st-about">
                    <i class="fa fa-newspaper-o"></i>
                    <div class="style">
                        Add About
                        <span>{{$aboutuscontent_count}}</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4" style="margin-top: 30px">
            <a href="{{url('/addAddress')}}">
                <div class="stats st-address">
                    <i class="fa fa-address-card"></i>
                    <div class="style">
                        Add Address
                        <span>{{$address_count}}</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4" style="margin-top: 30px">
            <a href="{{url('/addProject')}}">
                <div class="stats st-project">
                    <i class="fa fa-home"></i>
                    <div class="style">
                        Add Project
                        <span>{{$project_count}}</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4" style="margin-top: 30px">
            <a href="{{url('/message/')}}">
                <div class="stats st-message">
                    <i class="fa fa-comments"></i>
                    <div class="style">
                        Total Messages
                        <span>{{$message_count}}</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br>
    {{------------------------------------------- Slider Data --------------------------------------------------------------}}

    <div class="box-header">
        <h2>Slider Data</h2>
    </div>
    <div align="center">
        <a href="{{Route('export.slider')}}" class="btn btn-success">Export To Excel</a>
    </div>

    <div class="box-body col-md-12">
        <table id="example2" class="table table-bordered table-hover box box-primary" role="grid" aria-describedby="example1_info" >
            <thead>
            <tr role="row">
                <th style="font-size: large">Name</th>
                <th style="font-size: large">Content</th>
                <th style="font-size: large">Status</th>
            </tr>
            </thead>
                @foreach($slider as $slider)
                    <tbody>
                    <tr role="row" class="odd">
                        <td>{{$slider->name}}</td>
                        <td>{{$slider->detail}}</td>
                        @if($slider->status ==1)
                            <td>
                                <div class="" style="width:80px;height: 20px;background-color: green" align="center">
                                    <label style="padding-bottom: 100px;color: white"  for="">Active</label>
                                </div>
                            </td>
                        @elseif($slider->status ==2)
                            <td>

                                <div class="" style="height: 20px;background-color: red" align="center">
                                    <label style="padding-bottom: 100px;color: white"  for=""> DeActive</label>
                                </div>
                            </td>
                        @endif
                    </tr>
                    </tbody>
                @endforeach
        </table>
    </div>
    {{------------------------------------------- About Content Data --------------------------------------------------------------}}
    <br>
    <br>
    <div class="box-header">
        <h1>About Content Data</h1>
    </div>
    <div align="center">
        <a href="{{Route('export.aboutus')}}" class="btn btn-success">Export To Excel</a>
    </div>
    <div class="box-body col-md-12">
        <table id="example2" class="table table-bordered table-hover box box-primary col-md-12" role="grid" aria-describedby="example1_info">
            <thead>
            <tr>
                <th style="font-size: large">Name</th>
                <th style="font-size: large">Content</th>
                <th style="font-size: large">Status</th>
            </tr>
            </thead>
                @foreach($aboutuscontent as $aboutuscontent)
                    <tbody>
                    <tr>
                        <td>{{$aboutuscontent->name}}</td>
                        <td>{{$aboutuscontent->detail}}</td>
                        @if($aboutuscontent->status ==1)
                            <td>
                                <div class="" style="width:80px;height: 20px;background-color: green" align="center">
                                    <label style="padding-bottom: 100px;color: white"  for="">Active</label>
                                </div>
                            </td>
                        @elseif($aboutuscontent->status ==2)
                            <td>
                                <div class="" style="height: 20px;background-color: red" align="center">
                                    <label style="padding-bottom: 100px;color: white"  for=""> DeActive</label>
                                </div>
                            </td>
                        @endif
                       </tr>
                    </tbody>
                @endforeach

        </table>
    </div>
    {{------------------------------------------- Address Data --------------------------------------------------------------}}
  <br>
  <br>
  <br>
    <div class="box-header">
        <h1>Address Data</h1>
    </div>
    <div align="center">
        <a href="{{Route('export.address')}}" class="btn btn-success">Export To Excel</a>
    </div>
    <div class="box-body col-md-12">
        <table class="table table-bordered table-hover   box box-primary" >
            <thead>
            <tr>
                <th style="font-size: large">Brunch Name</th>
                <th style="font-size: large">Address</th>
                <th style="font-size: large">Phones</th>
                <th style="font-size: large">Status</th>
            </tr>
            </thead>
                @foreach($address as $address)
                    <tbody>
                    <tr>
                        <td>{{$address->brunch }}</td>
                        <td>{{$address->address }}</td>
                        <td>{{$address->phone }}</td>
                        @if($address->status ==1)
                            <td>
                                <div class="" style="width:80px;height: 20px;background-color: green" align="center">
                                    <label style="padding-bottom: 100px;color: white"  for="">Active</label>
                                </div>
                            </td>
                        @elseif($address->status ==2)
                            <td>
                                <div class="" style="height: 20px;background-color: red" align="center">
                                    <label style="padding-bottom: 100px;color: white"  for=""> DeActive</label>
                                </div>
                            </td>
                        @endif
                      </tr>
                    <tbody>
                @endforeach
        </table>
    </div>


   
@stop