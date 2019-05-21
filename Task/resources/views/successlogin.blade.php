@extends('adminpanel')
@section('logout')
    {{ url('/main/logout') }}
@stop
@section('name')
    {{ Auth::user()->name }}
@stop
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
            <label for="">Age :</label><strong> {{ Auth::user()->age }}</strong><br>
            <label for="">Phone Number :</label><strong> {{ Auth::user()->phone }}</strong><br>
        </div>
    @else
        <script>window.location = "/main";</script>
    @endif


</div>
@stop