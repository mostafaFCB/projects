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
    <h3>Add product</h3>
    <div style="width: 100%">
        <form style="width: 100%"  action="ProductStore" method="post" enctype="multipart/form-data"  class="box-header with-border box box-primary container col-md-12">
            {{csrf_field()}}
            <div style="width: 50%" class="col-md-12">
                <div class="col-md-12" >
                    <label for="" style="font-size: large">New Product? </label><br>

                    <label class="blue-radio">Yes
                        <input type="radio" class="minimal" name="product" value="yes1" id="yesCheck1" onchange="yesnoCheck1()" >
                        <span class="checkmark"></span>
                    </label>
                    <label class="blue-radio">No
                        <input type="radio" class="minimal" name="product" value="no1" id="noCheck1"onchange="yesnoCheck1()"  checked>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div id="ifYes1" style="display: none" class="col-md-12">
                    <div class="form-group">
                        <label style="font-size: large">product Name</label><br>
                        <input class="form-control" type="text" name="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label style="font-size: large">product Description</label><br>
                        <textarea class="form-control" rows="7" name="desc">{{old('desc')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label style="font-size: large">product Price</label><br>
                        <input class="form-control" type="text" name="price" value="{{old('price')}}">
                    </div>
                    <div class="form-group">
                        <label style="font-size: x-large" for="uploadFile">upload picture</label>
                        <input  type="file" name="uploadFile[]" id="uploadFile">
                </div>
                <br>
                <label for="uploadFile"><div  id="image_preview"></div></label>
            </div>
                <div id="ifNo1"  class="col-md-12" >
                    <label for="" style="font-size: x-large"> Choose Product</label><br>
                    <select  class="names" data-placeholder="Choose product" name="cproduct">
                        <option value="0"></option>
                        @foreach($product as $product)
                            <option value="{{$product->id}}">{{$product->pro_name}}</option>
                        @endforeach
                    </select>
                </div>
        </div>
            <div class="form-group col-md-12">
                <label style="font-size: large">product Count</label><br>
                <input class="form-control" type="text" name="count" style="width: 50%" value="{{old('count')}}">
            </div>

            <div class="col-md-12" >
                <label for="" style="font-size: large">New Supplayer? </label><br>

                <label class="blue-radio">Yes
                    <input type="radio" class="minimal" name="supplayer" value="yes" id="yesCheck" onchange="yesnoCheck()" >
                    <span class="checkmark"></span>
                </label>
                <label class="blue-radio">No
                    <input type="radio" class="minimal" name="supplayer" value="no" id="noCheck"onchange="yesnoCheck()"  checked>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div id="ifYes" style="display: none" class="col-md-12">
                <div class="form-group">
                    <label style="font-size: large">supplayer Name</label><br>
                    <input class="form-control" type="text" name="sname" style="width: 50%" value="{{old('sname')}}">
                </div>
                <div class="form-group">
                    <label style="font-size: large">supplayer Address</label><br>
                    <textarea class="form-control" rows="7" name="address" style="width: 50%">{{old('address')}}</textarea>
                </div>
            </div>
            <div id="ifNo"  class="col-md-12" style="width: 50%" >
                <label for="" style="font-size: x-large"> Choose Supplayer</label><br>
                <select  class="names" data-placeholder="Choose supplayer" name="csupplayer">
                    <option value="0"></option>
                    @foreach($supplayer as $supplayer)
                    <option value="{{$supplayer->id}}">{{$supplayer->sup_name}}</option>
                        @endforeach
                </select>
            </div>
            <br>
            <div class="form-group col-md-12">
                <label style="font-size: xx-large">Status</label><br>
                <label class="blue-radio">Active
                    <input type="radio" checked="checked" name="active" value="2">
                    <span class="checkmark"></span>
                </label>
                <label class="blue-radio">Not Active
                    <input type="radio" name="active" value="1">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="col-md-12"><br>
                <button style="font-size: large"  type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>


    </Div>
@stop
