<?php

namespace App\Http\Controllers;

use App\aboutuscontent;
use App\ar_address;
use App\ar_setting;
use App\en_aboutuscontent;
use App\ar_aboutuscontent;
use App\ar_counter;
use App\counter;
use App\en_address;
use App\en_counter;
use App\en_setting;
use App\message;
use App\setting;
use App\slider;
use App\project;
use App\ar_project;
use App\en_project;
use App\address;
use App\en_slider;
use App\ar_slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;
use Validator;
use Auth;
use Excel;
use App\Exports;


class pagesController extends Controller
{

    /*---------------Login---------------*/
    /*
   function index()
    {
        return view('login');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );
        if(Auth::attempt($user_data))
        {
            return redirect('main/successlogin');
        }
        else
        {
            return back()->with('error','Wrong Login Details');
        }
    } */
    function successlogin()
    {
        return view('successlogin');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
/*--------------------ALL Data------------------*/

    public function allcustmer()
    {
        $members = user::all();
        return view('allcustmer', compact('members'));
    }
/*-----------------Delete----------------------*/

    public function destroy($id){
        $member = user::find($id);
        $member->delete();
        return redirect('/main/allcustmer');
    }
/*-----------------Edit------------------------*/

/*    public function edit($id){
        $members = user::find($id);
        return view('\edit', ['\member'=> $members]);
    }*/

    public function updateData(Request $req, $id){

       $user = user::find($id);
        $user -> name = $req->get('name');
        $user -> email = $req->get('email');
        $user -> password = $req->get('password');
        $user -> save();
        return redirect()->route('show');
    }


    function upload(Request $request){
        $image = $request->file('select_file');
        $new_name= rand(). '.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'),$new_name);
        return back()->with('path',$new_name);
    }



    /*-----------------------------Home Page--------------------------------------*/



    /*------------------------------Slider-----------------------------------------*/
    public function Slider(){

       $slider = DB::select('select * from access_en.en_sliders JOIN access.sliders on access_en.en_sliders.sliders_id = access.sliders.id where access_en.en_sliders.deleted and access.sliders.deleted = 2 ');

       // $slider = DB::table('sliders')->join('access.sliders as access_en.sliders','access.sliders.id','=','access.sliders.sliders_id');
        $slider_count = slider::where('deleted','=' ,'2')->count();
       // $slider =   slider::all();
        //    dd($slider_count);
       return view('Slider', compact('slider','slider_count'));
    }


    public function editSlider($id){
      //  $slider = DB::select('select * from access.sliders  where access.sliders.id ="17"');
    //  $slider= slider::all()->where('id',$id);
          $slider = slider::find($id);
         $en_slider= en_slider::all()->where('sliders_id',$id);
        $ar_slider= ar_slider::all()->where('sliders_id',$id);
        $key = $id -1 ;
       // $slider = DB::select('select * from access_en.en_sliders JOIN access.sliders where access_en.en_sliders.sliders_id = access.sliders.id = $id  ');
     // $en_slider= en_slider::find($id)->where('sliders_id',$id);
     // $en_slider= DB::table('access_en.en_sliders')->select('name')->where('sliders_id',$id);

    //  var_dump($ar_slider);
      //  dd($en_slider);
      //  return $slider;
       // dd($slider);
          return view('editSlider', compact('slider','en_slider','ar_slider','key'));
    }

    public function updateSlider(Request $request , $id){

        //$this->slider();
        $slider= slider::find($id);
        $en_slider= en_slider::find($id);
        $ar_slider= ar_slider::find($id);
        /*php artisan storage:link*/
        /*use Illuminate\Support\Facades\Storage;*/
        if($request->hasFile('image')){
            Storage::delete($slider->image);
            $path=$request->file('image')->store('images');
        }else{
            $path =$slider->image;
        }
        $slider->image =$path;
        $slider->status =$request->input('active');
        $slider->updated_by = Auth::user()->name;
        $slider->save();

        $en_slider->name =$request->input('name_en');
        $en_slider->detail =$request->input('detail_en');
        $en_slider->status =$request->input('active');
        $en_slider ->save();

        $ar_slider->name =$request->input('name_ar');
        $ar_slider->detail =$request->input('detail_ar');
        $ar_slider->status =$request->input('active');
        $ar_slider->save();

        return redirect('Slider')->with('success','You have Updated Successfully .');
    }

    public function deleteSlider($id){
      $slider = slider::find($id);
      $en_slider = en_slider::find($id);
      $ar_slider = ar_slider::find($id);
       // $slider = DB::select('select ', $id ,' from access.sliders and access_en.sliders');
       // $slider = DB::table('access_en.en_sliders')->select('slider_id')->where('id',$id);
        $slider->deleted = 1;
        $slider->save();

        $en_slider->deleted = 1;
        $en_slider->save();

        $ar_slider->deleted = 1;
        $ar_slider->save();

    return redirect('Slider');
    }
/*----------------------------------Counter-------------------------------------------*/
    public function counter(){
        $counter = DB::select('select * from access.counters JOIN access_en.en_counters on access.counters.id = access_en.en_counters.counters_id where access.counters.deleted and access_en.en_counters.deleted = 2 ');
       // $counter =   counter::all();
        return view('counter', compact('counter'));

    }

    public function editCounter($id){
        $counter = counter::find($id);
        $en_counter= en_counter::all()->where('counters_id',$id);
        $ar_counter= ar_counter::all()->where('counters_id',$id);
        $key = $id -1 ;


        return view('editCounter', compact('counter','en_counter','ar_counter','key'));
    }

    public function updateCounter(Request $request , $id){
        $this->counter();
        $counter= counter::find($id);
        $ar_counter= ar_counter::find($id);
        $en_counter= en_counter::find($id);
        /*php artisan storage:link*/
        /*use Illuminate\Support\Facades\Storage;*/
        if($request->hasFile('image')){
             Storage::delete($counter->image);
            $path=$request->file('image')->store('images');
        }else{
            $path =$counter->image;
        }
        $counter->counter =$request->input('counter');
        $counter->image =$path;
        $counter->updated_by = Auth::user()->name;
        $counter->save();
        $ar_counter->name =$request->input('name_ar');
        $ar_counter->save();
        $en_counter->name =$request->input('name_en');
        $en_counter->save();

        return redirect('counter')->with('success','You have Updated Successfully .');
    }

    public function deleteCounter($id){
        $counter = counter::find($id);
        $en_counter = en_counter::find($id);
        $ar_counter = ar_counter::find($id);

        $counter->deleted = 1;
        $counter->save();

        $en_counter->deleted = 1;
        $en_counter->save();

        $ar_counter->deleted = 1;
        $ar_counter->save();
        return redirect('counter');
    }


    /*-----------------------------------About Us ------------------------------------*/

                /*----------------------About Us Content--------------------*/
    public function aboutContent(){
        $aboutuscontent = DB::select('select * from access.aboutuscontents JOIN access_en.en_aboutuscontents on access.aboutuscontents.id = access_en.en_aboutuscontents.aboutuscontents_id where access.aboutuscontents.deleted and access_en.en_aboutuscontents.deleted = 2 ');

      //  $aboutuscontent =   aboutuscontent::all();
        return view('aboutContent', compact('aboutuscontent'));
    }

    public function addAboutContent(){

        return view ('addAboutContent');
    }
    public function AboutStore(Request $request){
        $aboutuscontent = new aboutuscontent;
        $en_aboutuscontent = new en_aboutuscontent;
        $ar_aboutuscontent = new ar_aboutuscontent;

        $this->validate($request,[
            'name_en'=> 'required',
            'name_ar'=> 'required',
            'detail_en'=> 'required',
            'detail_ar'=> 'required',
            'uploadFile'=> 'required|max:2048'
        ]);
        if($request->hasFile('uploadFile')){
          //  $path=$request->file('image')->store('images');
            foreach($request->uploadFile as $file){
                //   $filename = $file->getClientOriginalName();
                $path2=$file->store('images');

                // var_dump($path2);
                $aboutuscontent->image = $path2;
                $aboutuscontent->save();
            }

        }
       // $aboutuscontent->image = $path;
        $aboutuscontent->deleted = 2;
        $aboutuscontent->created_by = Auth::user()->name ;
        $aboutuscontent->status = $request->active;
        $aboutuscontent->save();
        $id = $aboutuscontent->id ;

        $en_aboutuscontent->name = $request->name_en;
        $en_aboutuscontent->detail = $request->detail_en;
        $en_aboutuscontent->aboutuscontents_id = $id;
        $en_aboutuscontent->deleted = 2;
        $en_aboutuscontent->status = $request->active;
        $en_aboutuscontent->save();

        $ar_aboutuscontent->name = $request->name_ar;
        $ar_aboutuscontent->detail = $request->detail_ar;
        $ar_aboutuscontent->aboutuscontents_id = $id;
        $ar_aboutuscontent->deleted = 2;
        $ar_aboutuscontent->status = $request->active;
        $ar_aboutuscontent->save();
        return redirect('/aboutContent')->with('success','You have add Successfully .');

    }

    public function editAboutContent($id){
        $aboutuscontent = aboutuscontent::find($id);
        $en_aboutuscontent = en_aboutuscontent::find($id);
        $ar_aboutuscontent = ar_aboutuscontent::find($id);
        $key = $id -1 ;
        return view ('editAboutContent',compact('aboutuscontent','en_aboutuscontent','ar_aboutuscontent','key'));
    }

    public function updateAboutContent(Request $request ,$id){

        $aboutuscontent= aboutuscontent::find($id);
        $en_aboutuscontent= en_aboutuscontent::find($id);
        $ar_aboutuscontent= ar_aboutuscontent::find($id);
        /*php artisan storage:link*/
        /*use Illuminate\Support\Facades\Storage;*/
        if($request->hasFile('image')){
            Storage::delete($aboutuscontent->image);
            $path=$request->file('image')->store('images');
        }else{
            $path =$aboutuscontent->image;
        }

        $aboutuscontent->image =$path;
        $aboutuscontent->updated_by = Auth::user()->name;
        $aboutuscontent->save();

        $en_aboutuscontent->name =$request->input('name_en');
        $en_aboutuscontent->detail =$request->input('detail_en');
        $en_aboutuscontent->save();

        $ar_aboutuscontent->name =$request->input('name_ar');
        $ar_aboutuscontent->detail =$request->input('detail_ar');
        $ar_aboutuscontent->save();

        return redirect('/aboutContent')->with('success','You have Updated Successfully .');
    }

    public function deleteAboutContent($id){
        $aboutuscontent = aboutuscontent::find($id);
        $en_aboutuscontent = en_aboutuscontent::find($id);
        $ar_aboutuscontent = ar_aboutuscontent::find($id);

        $aboutuscontent->deleted = 1;
        $aboutuscontent->save();

        $en_aboutuscontent->deleted = 1;
        $en_aboutuscontent->save();

        $ar_aboutuscontent->deleted = 1;
        $ar_aboutuscontent->save();
        return redirect ('aboutContent');
    }

                /*----------------- message-------------------*/

    public function message(){
        $message = message::all();
        return view('message',compact('message'));

    }
    public function addMessage(Request $request){
        $message = new message();
        $message->first_name = $request->firstname;
        $message->last_name = $request->lastname;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->description = $request->message;
        $message->save();

        return back()->with('success','You Message Has Been Sent.');

    }

     public function deleteMessage($id){
         $message = message::find($id);
         $message->delete();
         return redirect ('message');
    }


                      /*--------------------------Follow US----------------*/

    public function setting($id){
        $setting = setting::find($id);
        $en_setting = en_setting::find($id);
        $ar_setting = ar_setting::find($id);
        return view('setting',compact('setting','en_setting','ar_setting'));
    }
    public function settingUpdate(Request $request, $id){
        $setting= setting::find($id);
        $en_setting= en_setting::find($id);
        $ar_setting= ar_setting::find($id);
        /*php artisan storage:link*/
        /*use Illuminate\Support\Facades\Storage;*/
        if($request->hasFile('image')){
            Storage::delete($setting->image);
            $path=$request->file('image')->store('images');
        }else{
            $path =$setting->image;
        }
        $setting->image =$path;
        $setting->facebook =$request->input('facebook');
        $setting->twitter =$request->input('twitter');
        $setting->instegram =$request->input('instegram');
        $setting->google_map =$request->input('googleMap');
        $setting->whatisapp =$request->input('whatisapp');
        $setting->created_by = Auth::user()->name ;
        $setting->updated_by = Auth::user()->name ;
        $setting->save();

        $en_setting->aboutus_detail =$request->input('aboutUs_en');
        $en_setting->web_name =$request->input('web_name_en');
        $en_setting->save();

        $ar_setting->aboutus_detail =$request->input('aboutUs_ar');
        $ar_setting->web_name =$request->input('web_name_ar');
        $ar_setting->save();
        return redirect('setting/1/edit')->with('success','You have Updated Successfully .');

    }
                        /*------------------------Address------------------*/
    public function address(){
       // $address =   address::all();
        $address = DB::select('select * from access.addresses JOIN access_en.en_addresses on access.addresses.id = access_en.en_addresses.addresses_id where access.addresses.deleted and access_en.en_addresses.deleted = 2');

        return view('address', compact('address'));
    }

    public function addAddress(){

     return view('/addAddress');
    }

    public function StoreAddress(Request $request){
        $address = new address();
        $en_address = new en_address();
        $ar_address = new ar_address();
        $this->validate($request,[
            'brunch_en'=> 'required',
            'brunch_ar'=> 'required',
            'address_en'=> 'required',
            'address_ar'=> 'required',
            'phone'=> 'required',

        ]);

        $address->phone = $request->phone;
        $address->deleted = 2;
        $address->created_by = Auth::user()->name ;
        $address->status = $request->active;
        $address->save();
        $id = $address-> id;

        $en_address->brunch = $request->brunch_en;
        $en_address->address = $request->address_en;
        $en_address->addresses_id = $id;
        $en_address->deleted = 2;
        $en_address->status = $request->active;
        $en_address->save();

        $ar_address->brunch = $request->brunch_ar;
        $ar_address->address = $request->address_ar;
        $ar_address->addresses_id = $id;
        $ar_address->deleted = 2;
        $ar_address->status = $request->active;
        $ar_address->save();

        return redirect('/address')->with('success','You have add successfully .');
    }


    public function editAddress($id){
        $address = address::find($id);
        $en_address = en_address::find($id);
        $ar_address = ar_address::find($id);
        $key = $id -1 ;
        return view('editAddress', compact('address','en_address','ar_address','key'));
    }

    public function updateAddress(Request $request , $id){
        $this->address();
        $address = address::find($id);
        $en_address = en_address::find($id);
        $ar_address = ar_address::find($id);

        $address->phone =$request->input('phone');
        $address->updated_by = Auth::user()->name;
        $address->save();

        $en_address->brunch =$request->input('brunch_en');
        $en_address->address =$request->input('address_en');
        $en_address->save();

        $ar_address->brunch =$request->input('brunch_ar');
        $ar_address->address =$request->input('address_ar');
        $ar_address->save();

        return redirect('address')->with('success','You have Updated successfully .');
    }
    public function deleteAddress($id){
        $addresses = address::find($id);
        $en_addresses = en_address::find($id);
        $ar_addresses = ar_address::find($id);

        $addresses->deleted = 1;
        $addresses->save();

        $en_addresses->deleted = 1;
        $en_addresses->save();

        $ar_addresses->deleted = 1;
        $ar_addresses->save();

        return redirect('address');
    }

    /*------------------------------------Projects-----------------------------------------*/
    /*--------------------- Projects----------------------------*/

    public function Project(){
        $project = DB::select('select * from access.projects JOIN access_en.en_projects on access.projects.id = access_en.en_projects.projects_id where access.projects.deleted and access_en.en_projects.deleted = 2 ');

        return view('Project', compact('project'));
    }

    public function addProject(){

    return view('addProject');
    }
    public function storeProject(Request $request){
        $project = new project;
        $en_project = new en_project;
        $ar_project = new ar_project();

        $this->validate($request,[
            'name_en'=> 'required',
            'name_ar'=> 'required',
            'miniDetail_en'=> 'required',
            'miniDetail_ar'=> 'required',
            'detail_en'=> 'required',
            'detail_ar'=> 'required',
            'image'=> 'required|image|max:2048',
            'sliderimage'=> 'required|max:2048'
        ]);
        if($request->hasFile('image')){
            $path=$request->file('image')->store('images');
        }
        if($request->hasFile('sliderimage')){

            foreach($request->sliderimage as $file){
                $filename = $file->getClientOriginalName();
                $path2=$file->storeAs('images',$filename);

               // var_dump($path2);
                $project->slider_image = $path2;
                $project->save();
            }
        }



       $project->image = $path;
        $project->type  = $request->project;
        $project->deleted  = 2;
        $project->created_by = Auth::user()->name ;
        $project->status = $request->active;
        $project->save();
        $id =$project->id;

        $en_project->name = $request->name_en;
        $en_project->mini_detail  = $request->miniDetail_en;
        $en_project->detail  = $request->detail_en;
        $en_project->projects_id  = $id;
        $en_project->deleted  = 2;
        $en_project->status = $request->active;
        $en_project->save();


        $ar_project->name = $request->name_ar;
        $ar_project->mini_detail  = $request->miniDetail_ar;
        $ar_project->detail  = $request->detail_ar;
        $ar_project->projects_id  = $id;
        $ar_project->deleted  = 2;
        $ar_project->status = $request->active;
        $ar_project->save();

     return redirect('Project')->with('success','You have add successfully .');
    }

    public function editProject($id){
        $project = project::find($id);
        $en_project = en_project::find($id);
        $ar_project = ar_project::find($id);
        return view('editProject',compact('project','en_project','ar_project'));
    }

    public function updateProject(Request $request , $id){
        $this->projects();
        $project = project::find($id);
        $en_project = en_project::find($id);
        $ar_project = ar_project::find($id);
        /*php artisan storage:link*/
        /*use Illuminate\Support\Facades\Storage;*/
        if($request->hasFile('image')){
            Storage::delete($project->image);
            $path=$request->file('image')->store('images');
        }else{
            $path =$project->image;
        }
        if( $request->hasFile('sliderimage')){
            Storage::delete($project->slider_image);
            $path2=$request->file('sliderimage')->store('images');
        }else{
            $path2 =$project->slider_image;
        }
        $project->slider_image =$path2;
        $project->image =$path;
        $project->type =$request->input('project');
        $project->updated_by = Auth::user()->name;
        $project->save();

        $en_project->name =$request->input('name_en');
        $en_project->mini_detail =$request->input('miniDetail_en');
        $en_project->detail =$request->input('detail_en');
        $en_project->save();

        $ar_project->name =$request->input('name_ar');
        $ar_project->mini_detail =$request->input('miniDetail_ar');
        $ar_project->detail =$request->input('detail_ar');
        $ar_project->save();

        return redirect('Project')->with('success','You have Updated successfully .');
    }

    public function deleteProject($id){
        $project = project::find($id);
        $en_project = en_project::find($id);
        $ar_project = ar_project::find($id);

        $project->deleted  = 1;
        $project->save();

        $en_project->deleted  = 1;
        $en_project->save();

        $ar_project->deleted  = 1;
        $ar_project->save();
        return redirect('Project');
    }

/*-----------------Project Pages------------------------------*/

public function home(){

    $addresses = DB::select('select * from access.addresses JOIN access_en.en_addresses on access.addresses.id = access_en.en_addresses.addresses_id where access.addresses.deleted and access_en.en_addresses.deleted = 2 and access.addresses.status = 1 ');
    $slider = DB::select('select * from access_en.en_sliders JOIN access.sliders on access_en.en_sliders.sliders_id = access.sliders.id where access_en.en_sliders.deleted and access.sliders.deleted = 2 and access.sliders.status = 1 ');
    $counter = DB::select('select * from access.counters JOIN access_en.en_counters on access.counters.id = access_en.en_counters.counters_id where access.counters.deleted and access_en.en_counters.deleted = 2 and access.counters.status = 1 ');
    $project = DB::select('select * from access.projects JOIN access_en.en_projects on access.projects.id = access_en.en_projects.projects_id where access.projects.deleted and access_en.en_projects.deleted = 2 and access.projects.status = 1');
    $setting = DB::select('select * from access.settings JOIN access_en.en_settings on access.settings.id = access_en.en_settings.settings_id');

    return view('frontend/index',compact('addresses','slider','counter','project','setting'));
}
    public function about(){
        $aboutuscontent = DB::select('select * from access.aboutuscontents JOIN access_en.en_aboutuscontents on access.aboutuscontents.id = access_en.en_aboutuscontents.aboutuscontents_id where access.aboutuscontents.deleted and access_en.en_aboutuscontents.deleted = 2 and access.aboutuscontents.status = 1  ');
        $addresses = DB::select('select * from access.addresses JOIN access_en.en_addresses on access.addresses.id = access_en.en_addresses.addresses_id where access.addresses.deleted and access_en.en_addresses.deleted = 2 and access.addresses.status = 1  ');
        $setting = DB::select('select * from access.settings JOIN access_en.en_settings on access.settings.id = access_en.en_settings.settings_id');
        return view('frontend/about',compact('addresses','aboutuscontent','setting'));
    }
    public function projects(){
        $addresses = DB::select('select * from access.addresses JOIN access_en.en_addresses on access.addresses.id = access_en.en_addresses.addresses_id where access.addresses.deleted and access_en.en_addresses.deleted = 2 and access.addresses.status = 1');
        $project = DB::select('select * from access.projects JOIN access_en.en_projects on access.projects.id = access_en.en_projects.projects_id where access.projects.deleted and access_en.en_projects.deleted = 2 and access.projects.status = 1');
        $setting = DB::select('select * from access.settings JOIN access_en.en_settings on access.settings.id = access_en.en_settings.settings_id');
        return view('frontend/projects',compact('addresses','project','setting'));
    }
    public function fproject(){
        $addresses = DB::select('select * from access.addresses JOIN access_en.en_addresses on access.addresses.id = access_en.en_addresses.addresses_id where access.addresses.deleted and access_en.en_addresses.deleted = 2 and access.addresses.status = 1');
        $setting = DB::select('select * from access.settings JOIN access_en.en_settings on access.settings.id = access_en.en_settings.settings_id');
      //  $project = project::all()->where('type','1');
        $project = DB::select('select * from access.projects JOIN access_en.en_projects on access.projects.id = access_en.en_projects.projects_id where access.projects.deleted and access_en.en_projects.deleted = 2 and access.projects.type = 1 and access.projects.status = 1');

        return view('frontend/finishedProject',compact('addresses','project','setting'));
    }
    public function cproject(){
        $addresses = DB::select('select * from access.addresses JOIN access_en.en_addresses on access.addresses.id = access_en.en_addresses.addresses_id where access.addresses.deleted and access_en.en_addresses.deleted = 2 and access.addresses.status = 1');
        $setting = DB::select('select * from access.settings JOIN access_en.en_settings on access.settings.id = access_en.en_settings.settings_id');
       // $project = project::all()->where('type','2');
        $project = DB::select('select * from access.projects JOIN access_en.en_projects on access.projects.id = access_en.en_projects.projects_id where access.projects.deleted and access_en.en_projects.deleted = 2 and access.projects.type = 2 and access.projects.status = 1');


        return view('frontend/currentProject',compact('addresses','project','setting'));
    }
    public function contact(){
        $addresses = DB::select('select * from access.addresses JOIN access_en.en_addresses on access.addresses.id = access_en.en_addresses.addresses_id where access.addresses.deleted and access_en.en_addresses.deleted = 2 and access.addresses.status = 1');
        $setting = DB::select('select * from access.settings JOIN access_en.en_settings on access.settings.id = access_en.en_settings.settings_id');
        return view('frontend/contact',compact('addresses','setting'));
    }
    public function singleProject($id){
        $addresses = DB::select('select * from access.addresses JOIN access_en.en_addresses on access.addresses.id = access_en.en_addresses.addresses_id where access.addresses.deleted and access_en.en_addresses.deleted = 2 and access.addresses.status = 1');
        $setting = DB::select('select * from access.settings JOIN access_en.en_settings on access.settings.id = access_en.en_settings.settings_id');
       $project = project::find($id);
       $en_project = en_project::all()->where('projects_id','=',$id);
        $key = $id -1 ;
      //  $project = DB::select('select * from access.projects JOIN access_en.en_projects on access.projects.id = access_en.en_projects.projects_id where access.projects.id'.'='. $id);

        return view('frontend/single-project',compact('addresses','project','setting','en_project','key'));
    }
    /*----------------- Register-------------------*/
/*
    public function create(){
        return view('member_add');
    }
    public function store(Request $req){
        $this->validate($req,
            [
                'name'  => 'required|min:5',
                'email' =>  'required|min:5',
                'password' =>  'required',
                'age' =>  'required|numeric',
                'phone' =>  'required|numeric'
            ]);
        user::create($req->all());
        return redirect('/main');
    }*/


/*-----------------------------------------*/
   /*


    public function login(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $checkLogin = DB::table('ppldetails')->where(['email'=>$email,'password'=>$password])->get();
        if(count($checkLogin)  >0)
        {
            return redirect('/allcustmer');
        }
        else
        {
            echo "Login Faield";


        }
    }*/

    public function excel_slider()
    {
      // $slider= DB::table('access_en.en_sliders')->where('deleted','=' ,'2')->get();
       // $slider = DB::select('select * from access_en.en_sliders JOIN access.sliders on access_en.en_sliders.sliders_id = access.sliders.id where access_en.en_sliders.deleted and access.sliders.deleted = 2 ');
      //  return  $slider;
        /* $slider_array[] =array('Slider_Name','Slider_Content');

        foreach($slider_data as $slider){
            $slider_array[] = array(
                'Slider_Name' => $slider->name,
                'Slider_Content' => $slider->detail
            );
        }*/
   /*    return \Excel::create('Slider_Data', function($excel) use ($slider){
       // $excel->setTitle('Customer Data');
        $excel->sheet('Customer Data', function($sheet) use ($slider){
            $sheet->fromArray($slider);
        });
    })->download('xls');*/
      return \Excel::download(new Exports\sliders(), 'sliders.xlsx');
    }


    public function excel_counter()
    {

        return \Excel::download(new Exports\counters(), 'counters.xlsx');
    }

    public function excel_aboutus()
    {

        return \Excel::download(new Exports\aboutus(), 'aboutus.xlsx');
    }

    public function excel_message()
    {

        return \Excel::download(new Exports\messages(), 'messages.xlsx');
    }

    public function excel_address()
    {

        return \Excel::download(new Exports\address(), 'address.xlsx');
    }

    public function excel_project()
    {

        return \Excel::download(new Exports\project(), 'projects.xlsx');
    }


}
