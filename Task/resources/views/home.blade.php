@extends('layouts.adminpanel')

@section('content')
    <div class="box-body container col-md-12">
        <div class="box-header">
            <h2>Dashboard</h2>
        </div>
        <div class="col-md-12">
            <div class="row"  style="text-align: center">
                <div class="col-md-4">
                    <a href="{{url('/addproduct')}}">
                        <div class="stats st-members">
                            <i class="fa fa-product-hunt icon"></i>
                            <div class="style">
                                Add Product
                                <span class="">{{count($products)}}</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/addsupplayer">
                        <div class="stats st-pending">
                            <i class="fa fa-user-plus icon"></i>
                            <div class="style">
                                Add Supplayer
                                <span class="">{{count($supplayers)}}</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/addclient">
                        <div class="stats st-comments">
                            <i class="fa fa-user-secret icon"></i>
                            <div class="style">
                                Add Client
                                <span class="">{{count($clients)}}</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4" style="margin-top: 30px;margin-left: 33%">
                    <a href="/addemployee">
                        <div class="stats st-items">
                            <i class="fa fa-male icon"></i>
                            <div class="style">
                                Add Empolyee
                                <span class="">{{count($emps)}}</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <form action="getdata" method="post" enctype="multipart/form-data" class="box box-primary col-md-12 homeform">
           {{csrf_field()}}
            <label style="font-size: x-large">Products</label><br>
            <div class="form-group row col-md-11">
                <label for="example-date-input1" class="col-2 col-form-label">From</label>
                <div class="col-10">
                    <input class="form-control" name="from1" type="date" value="2019-05-01" id="example-date-input1">
                </div>
            </div>
            <div class="form-group row col-md-11">
                <label for="example-date-input2" class="col-2 col-form-label">To</label>
                <div class="col-10">
                    <input class="form-control" name="to1" type="date" value="2019-05-01" id="example-date-input2">
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px">
                <input class="btn btn-primary " type="submit" value="submit">
            </div>

        </form>


        <form action="getdata" method="post" enctype="multipart/form-data"class="box box-primary col-md-12">
            {{csrf_field()}}
            <label style="font-size: x-large">supplayers</label><br>
            <div class="form-group row col-md-11">
                <label for="example-date-input3" class="col-2 col-form-label">From</label>
                <div class="col-10">
                    <input class="form-control" name="from2" type="date" value="2019-05-01" id="example-date-input3">
                </div>
            </div>
            <div class="form-group row col-md-11">
                <label for="example-date-input4" class="col-2 col-form-label">To</label>
                <div class="col-10">
                    <input class="form-control" name="to2" type="date" value="2019-05-01" id="example-date-input4">
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px">
                <input class="btn btn-primary " type="submit" value="submit">
            </div>
        </form>

        <form action="getdata" method="post" enctype="multipart/form-data"class="box box-primary col-md-12">
            {{csrf_field()}}
            <label style="font-size: x-large">Clients</label><br>
            <div class="form-group row col-md-11">
                <label for="example-date-input5" class="col-2 col-form-label">From</label>
                <div class="col-10">
                    <input class="form-control" name="from3" type="date" value="2019-05-01" id="example-date-input5">
                </div>
            </div>
            <div class="form-group row col-md-11">
                <label for="example-date-input6" class="col-2 col-form-label">To</label>
                <div class="col-10">
                    <input class="form-control" name="to3" type="date" value="2019-05-01" id="example-date-input6">
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px">
                <input class="btn btn-primary " type="submit" value="submit">
            </div>
        </form>
    </div>

@endsection
