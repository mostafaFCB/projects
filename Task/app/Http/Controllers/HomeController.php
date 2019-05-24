<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employe;
use App\member;
use App\product;
use App\client;
use App\supplayer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$products =   product::all()->where('deleted','2');
        $supplayers =   supplayer::all()->where('deleted','2');
        $clients =   client::all()->where('deleted','2');
        $emps =   employe::all()->where('deleted','2');
        return view('home',compact('products','supplayers','clients','emps'));
    }
}
