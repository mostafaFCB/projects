<?php

namespace App\Http\Controllers;

use App\ar_counter;
use App\en_counter;
use App\en_slider;
use App\ar_slider;
use Illuminate\Http\Request;
use App\aboutuscontent;
use App\counter;
use App\slider;
use App\project;
use App\address;
use Validator;
use Auth;


class addController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


/*----------------------- about content ------------------*/
    public function addAboutContent(){

        return view ('addAboutContent');
    }

    public function AboutStore(Request $request){
        $aboutUs = new aboutuscontent;
        $message =['image.max'=>"this max size"];

        $this->validate($request,[
            'image'=> 'required|max:2048',$message]);
        if($request->hasFile('image')){
            $path=$request->file('image')->store('images');
        }
        $aboutUs->image = $path;
        $aboutUs->name = $request->name;
        $aboutUs->detail = $request->detail;

        $aboutUs->save();
        return redirect('/aboutContent');
    }


/*-------------------- Slider-------------------------------*/
    public function addSlider(){

        return view('addSlider');
    }
    public function sliderStore(Request $request)
    {
        $slider = new slider;
        $en_slider = new en_slider;
        $ar_slider = new ar_slider;

        $this->validate($request,[
            'name_en'=> 'required',
            'name_ar'=> 'required',
            'detail_en'=> 'required',
            'detail_ar'=> 'required',
            'uploadFile'=> 'required|max:5000|',

        ]);
        if($request->hasFile('uploadFile')){

         //   $path=$request->file('uploadFile')->store('images');
         //   $path2=$request->file('image')->getSize();
            foreach($request->uploadFile as $file){
                $filename = $file->getClientOriginalName();
                $path2=$file->storeAs('images',$filename);

                // var_dump($path2);
                $slider->image = $path2;
                $slider->save();
            }
        }

      //  $slider->image = $path;
        $slider->deleted = 2;
        $slider->created_by = Auth::user()->name ;
        $slider->status = $request->active;
        $slider->save();
        $id = $slider->id ;

        $en_slider->name = $request->name_en;
        $en_slider->detail = $request->detail_en;
        $en_slider->status = $request->active;
        $en_slider->sliders_id = $id ;
        $en_slider->deleted = 2;
        $en_slider->save();

        $ar_slider->name = $request->name_ar;
        $ar_slider->detail = $request->detail_ar;
        $ar_slider->status = $request->active;
        $ar_slider->sliders_id = $id ;
        $ar_slider->deleted = 2;
        $ar_slider->save();

      return redirect('/Slider')->with('success','You have add Successfully .');
    }

    /*--------------------- Counter -------------------*/

    public function addCounter(){

        return view('addCounter');
    }

    public function CounterStore(Request $request){

        $counter = new counter;
        $en_counter = new en_counter;
        $ar_counter = new ar_counter;
        $this->validate($request,[
            'name_en'=> 'required',
            'name_ar'=> 'required',
            'counter'=> 'required|numeric',
            'uploadFile'=> 'required|image|max:2048'
        ]);
        if($request->hasFile('uploadFile')){
           // $path=$request->file('image')->store('images');
            foreach($request->uploadFile as $file){
             //   $filename = $file->getClientOriginalName();
                $path2=$file->store('images');

                // var_dump($path2);
                $counter->image = $path2;
                $counter->save();
            }

        }
        $counter->counter = $request->counter;
       // $counter->image = $path;
        $counter->deleted = 2;
        $counter->created_by = Auth::user()->name ;
        $counter->status = $request->active;
        $counter->save();
        $id = $counter->id ;

        $en_counter->name = $request->name_en;
        $en_counter->counters_id = $id ;
        $en_counter->deleted = 2;
        $en_counter->status = $request->active;
        $en_counter->save();

        $ar_counter->name = $request->name_ar;
        $ar_counter->counters_id = $id ;
        $ar_counter->deleted = 2;
        $ar_counter->status = $request->active;
        $ar_counter->save();
        return redirect('/counter')->with('success','You have add Successfully .');

    }

}
