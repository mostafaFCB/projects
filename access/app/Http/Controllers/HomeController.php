<?php

namespace App\Http\Controllers;

use App\aboutuscontent;
use App\address;
use App\counter;
use App\message;
use App\project;
use App\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $slider_count = slider::where('deleted','=' ,'2')->count();
        $counter_count = counter::where('deleted','=' ,'2')->count();
        $aboutuscontent_count = aboutuscontent::where('deleted','=' ,'2')->count();
        $address_count = address::where('deleted','=' ,'2')->count();
        $project_count = project::where('deleted','=' ,'2')->count();
        $message_count = message::all()->count();

        $slider= DB::table('access_en.en_sliders')->where('deleted','=' ,'2')->get();
        $counter = DB::select('select 3 from access.counters JOIN access_en.en_counters on access.counters.id = access_en.en_counters.counters_id where access.counters.deleted and access_en.en_counters.deleted = 2 ');
        $aboutuscontent = DB::table('access_en.en_aboutuscontents')->join('access.aboutuscontents','access.aboutuscontents.id','=','access_en.en_aboutuscontents.aboutuscontents_id')->where('access.aboutuscontents.deleted','=' ,'2')->get();
        $address= DB::table('access_en.en_addresses')->join('access.addresses','access.addresses.id','=','access_en.en_addresses.addresses_id')->where('access.addresses.deleted','=' ,'2')->get();
        $project = DB::select('select 3 from access.projects JOIN access_en.en_projects on access.projects.id = access_en.en_projects.projects_id where access.projects.deleted and access_en.en_projects.deleted = 2 ');

        //    $slider_count = count($slider);
        return view('home',compact('slider','counter','aboutuscontent','address','project','slider_count','counter_count','aboutuscontent_count','address_count','project_count','message_count'));
    }
}
