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
    <h3>Add Client</h3>
    <div style="width: 100%">
        <form style="width: 100%"  action="clientStore" method="post" enctype="multipart/form-data"  class="box-header with-border box box-primary container col-md-12">
            {{csrf_field()}}
            <div style="width: 50%" class="col-md-12">
                <div class="form-group">
                    <label style="font-size: large">Client Name</label><br>
                    <input class="form-control" type="text" name="name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label style="font-size: large">Client Address</label><br>
                    <textarea class="form-control" rows="7" name="address">{{old('address')}}</textarea>
                </div>
                <div  class="col-md-12" >
                    <label for="" style="font-size: x-large"> Choose Product</label><br>
                    <select  class="names" data-placeholder="Choose Product" name="cproduct">
                        <option value="0"></option>
                        @foreach($product as $product)
                            <option value="{{$product->id}}">{{$product->pro_name}} &nbsp&nbsp -> &nbsp Price &nbsp&nbsp {{$product->price}} &nbsp &nbsp -> &nbsp Count &nbsp&nbsp {{$product->count}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label style="font-size: large">Count</label><br>
                    <input class="form-control" type="text" name="count" value="{{old('count')}}">
                </div>
                <div class="form-group">
                    <label style="font-size: large">Price </label><br>
                    <input class="form-control" type="text" name="price" value="{{old('price')}}">
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
            </div>
        </form>
    </div>
@stop
