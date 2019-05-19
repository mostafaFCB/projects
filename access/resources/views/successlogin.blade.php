@extends('layouts.adminpanel')

@section('content')
<div class="container box">
    <h3 align="center">Welcome</h3><br/>

    @if(isset(Auth::user()->email))
        <div class="alert alert-danger success-block">
            <strong>Welcome {{ Auth::user()->name }}</strong>
            <br>
        </div>
        <div class="container">
            <label for="">Email :</label><strong> {{ Auth::user()->email }}</strong><br>
            <label for="">Created At : </label><strong> {{ Auth::user()->created_at }}</strong><br>
            {{--<label for="">Phone Number :</label><strong> {{ Auth::user()->phone }}</strong><br>--}}
        </div>
    @else
        <script>window.location = "/home";</script>
    @endif

</div>
@stop