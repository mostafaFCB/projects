<?php

namespace App\Http\Controllers;

use App\employe;
use App\member;
use App\product;
use App\client;
use App\suplayer_product;
use App\supplayer;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Excel;
use App\Exports;

class PagesController extends Controller
{
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }


/*---------------------------------   Products  -------------------------------*/

    public function products(){
       // $product = DB::select('select * from products.products where products.deleted = 2 ');

     //   $product =   product::all()->where('deleted','2');
        $products =   product::orderBy('id','desc')->where('deleted','2')->paginate(5);

        return view('/products',compact('products'));
    }

    public function addproduct(){
        $supplayer =   supplayer::all()->where('deleted','2');
        $product =   product::all()->where('deleted','2');
        return view ('/addproduct', compact('supplayer','product'));
    }
    public function productStore(Request $request){

        $product = new product();
        $supplayer = new supplayer();
        $supplayer_product = new suplayer_product();

        if($request->product == "yes1"){

            $this->validate($request,[
                'name'=> 'required',
                'desc'=> 'required',
                'price'=> 'required|numeric',
                'count'=> 'required|numeric',
                'uploadFile'=> 'required|max:6000'
            ],[
                'uploadFile.required'=> 'please choose image .',
                'desc.required'=> 'product Description is required',

            ]);

            if($request->hasFile('uploadFile')) {
                foreach ($request->uploadFile as $file) {
                    $filename = $file->getClientOriginalName();
                    $path2 = $file->store('images');

                    // var_dump($path2);
                    $product->image = $path2;
                    $product->save();
                }
            }
            $product->pro_name = $request->name;
            $product->description = $request->desc;
            $product->price = $request->price;
            $product->count = $request->count;
            $product->deleted = 2;
            $product->created_by = Auth::user()->name ;
            $product->status = $request->active;
            $product->save();
            $id = $product->id;

        }
        elseif($request->product == "no1") {

            $this->validate($request, [
                'cproduct' => 'required|not_in:0',
                'count'=> 'required|numeric',
            ],[
                'cproduct.not_in' => 'please Choose Product',

            ]);
                $id1 = $request->cproduct;
            $product1 = product::find($id1);
            $product1->count = $product1->count + $request->count;
            $product1->save();
            $id = $id1;
        }


        if($request->supplayer == "yes"){
            $this->validate($request, [
                'sname' => 'required',
                'address' => 'required',
            ],[
                'sname.required' => 'supplayer name required',
            ]);

            $supplayer->sup_name = $request->sname;
            $supplayer->address = $request->address;
            $supplayer->pro_count = $request->count;
            $supplayer->status = 2;
            $supplayer->deleted = 2;
            $supplayer->save();

            $supplayer_product->supplayers_id = $supplayer->id;
            $supplayer_product->products_id = $id;
            $supplayer_product->product_count = $request->count;
            $supplayer_product->deleted = 2;
            $supplayer_product->save();


        }elseif($request->supplayer == "no"){
            $this->validate($request, [
                'csupplayer' => 'required|not_in:0',
            ],[
                'csupplayer.not_in' => 'choose supplayer',
            ]);
                $id2= $request->csupplayer;
            $supplayer1 = supplayer::find($id2);
            $supplayer1->pro_count = $supplayer1->pro_count + $request->count;
            $supplayer1->save();
            $supplayer_product->supplayers_id = $request->csupplayer;
            $supplayer_product->products_id = $id;
            $supplayer_product->deleted = 2;
            $supplayer_product->product_count = $request->count;
            $supplayer_product->save();
        }

        return redirect('/products')->with('success','You have add Successfully .');

    }

    public function editproduct($id){
        $product = product::find($id);

        return view ('/editproduct',compact('product'));
    }

    public function updateProduct(Request $request ,$id){

        $product = product::find($id);

        /*php artisan storage:link*/
        /*use Illuminate\Support\Facades\Storage;*/
        if($request->hasFile('image')){
            Storage::delete($product->image);
            $path=$request->file('image')->store('images');
        }else{
            $path =$product->image;
        }
        $product->pro_name =$request->input('name');
        $product->description =$request->input('desc');
        $product->image =$path;
        $product->updated_by = Auth::user()->name;
        $product->status = $request->input('active');
        $product->save();

        return redirect('/products')->with('success','You have Updated Successfully .');
    }

    public function deleteProduct($id){
        $product = product::find($id);

        $product->deleted = 1;
        $product->save();

        return redirect ('products');
    }


    /*---------------------------  supplayer  ------------------------*/

    public function supplayers(){
        // $product = DB::select('select * from products.products where products.deleted = 2 ');

        $supplayers =   supplayer::orderBy('id','desc')->where('deleted','2')->paginate(5);
        return view('/supplayers', compact('supplayers'));
    }

    public function addsupplayer(){
        $product =   product::all()->where('deleted','2');
        return view ('/addsupplayer', compact('product'));
    }
    public function supplayerStore(Request $request){

        $product = new product();
        $supplayer = new supplayer();
        $supplayer_product = new suplayer_product();

        $this->validate($request,[
            'name'=> 'required',
            'address'=> 'required',
            'count'=> 'required|numeric',
        ],[
            'name.required'=> 'Supplayer Name is required',
        ]);

        $supplayer->sup_name = $request->name;
        $supplayer->address = $request->address;
        $supplayer->deleted = 2;
        $supplayer->created_by = Auth::user()->name ;
        $supplayer->status = $request->active;
        $supplayer->pro_count = $request->count;
        $supplayer->save();
            $id = $supplayer->id;


        if($request->product == "yes"){

            $this->validate($request,[
                'pname'=> 'required',
                'desc'=> 'required',
                'price'=> 'required|numeric',
                'uploadFile'=> 'required',
            ],[
                'pname.required'=> 'product Name is required',
                'desc.required'=> 'product Description is required',
                'uploadFile.required'=> 'product image is required',
            ]);

            if($request->hasFile('uploadFile')) {
                foreach ($request->uploadFile as $file) {
                 //   $filename = $file->getClientOriginalName();
                    $path2 = $file->store('images');
                    // var_dump($path2);
                    $product->image = $path2;
                    $product->save();
                }
            }
            $product->pro_name = $request->pname;
            $product->description = $request->desc;
            $product->price = $request->price;
            $product->count = $request->count;
            $product->deleted = 2;
            $product->created_by = Auth::user()->name ;
            $product->status = 2;
            $product->save();

            $supplayer_product->supplayers_id = $id;
            $supplayer_product->products_id = $product->id;
            $supplayer_product->product_count = $request->count;
            $supplayer_product->deleted = 2;
            $supplayer_product->save();

        }elseif($request->product == "no"){
            $this->validate($request,[
                'cproduct'=> 'required|not_in:0',
            ],[
                'cproduct.not_in'=> 'Please Choose Product',
            ]);
            $supplayer_product->supplayers_id = $id;
            $supplayer_product->products_id = $request->cproduct;
            $supplayer_product->product_count = $request->count;
            $supplayer_product->deleted = 2;
            $supplayer_product->save();
            $id1 = $request->cproduct;

            $product1 = product::find($id1);
            $product1->count = $product1->count + $request->input('count');
            $product1->save();

        }

        return redirect('/supplayers')->with('success','You have add Successfully .');

    }

    public function editsupplayer($id){
        $supplayer = supplayer::find($id);

        return view ('/editsupplayer',compact('supplayer'));
    }

    public function updatesupplayer(Request $request ,$id){

        $supplayer = supplayer::find($id);

        /*php artisan storage:link*/
        /*use Illuminate\Support\Facades\Storage;*/
        $supplayer->sup_name =$request->input('name');
        $supplayer->address =$request->input('address');
        $supplayer->updated_by = Auth::user()->name;
        $supplayer->status = $request->input('active');
        $supplayer->save();

        return redirect('/supplayers')->with('success','You have Updated Successfully .');
    }

    public function deletesupplayer($id){
        $supplayer = supplayer::find($id);
        $supplayer->deleted = 1;
        $supplayer->save();
        return redirect ('supplayers');
    }


/*-------------------------------------------- Clients --------------------------------------*/

    public function clients(){
       // $client = DB::select('select * from products join clients on products.id = clients.product_id where clients.deleted = 2 ');

        $clients = DB::table('products')->join('clients','products.id','=','product_id')->orderBy('clients.id','desc')->where('products.deleted','2')->paginate(5);

      //  $client =   client::all()->where('deleted','2');
    //    dd($client);
     // if(!$client){
     //      echo "not" ;
     //   }else{
      //      echo "empty" ;
      //  }
      return view('/clients', compact('clients'));
    }

    public function addclient(){
        $product =   product::all()->where('deleted','2');
        return view ('/addclient', compact('product'));
    }

    public function clientStore(Request $request){


        $client = new client();

        $this->validate($request,[
            'name'=> 'required',
            'address'=> 'required',
            'cproduct'=> 'required|not_in:0',
            'count'=> 'required|numeric',
            'price'=> 'required|numeric',
        ],[
            'name.required'=> 'Please Enter Client Name',
            'cproduct.not_in'=> 'Please Choose Product',
        ]);

        $client->client_name = $request->name;
        $client->address = $request->address;
        $client->deleted = 2;
        $client->created_by = Auth::user()->name ;
        $client->status = $request->active;
        $client->product_id = $request->cproduct;
        $client->price_unit = $request->price;
        $client->client_count = $request->count;
        $client->save();
        $id = $client->product_id;

        $product = product::find($id);
        $product->count = $product->count - $request->input('count');
        $product->save();

        return redirect('/clients')->with('success','You have add Successfully .');

    }

    public function editclient($id){
        $client = client::find($id);

        return view ('/editclient',compact('client'));
    }

    public function updateclient(Request $request ,$id){

        $client = client::find($id);

        /*php artisan storage:link*/
        /*use Illuminate\Support\Facades\Storage;*/

        $client->client_name =$request->input('name');
        $client->address =$request->input('address');
        $client->updated_by = Auth::user()->name;
        $client->status = $request->input('active');
        $client->save();

        return redirect('/clients')->with('success','You have Updated Successfully .');
    }

    public function deleteclient($id){
        $client = client::find($id);
        $client->deleted = 1;
        $client->save();
        return redirect ('clients');
    }

    /*-------------------------------------------- Employees --------------------------------------*/

    public function employees(){
        // $product = DB::select('select * from products.products where products.deleted = 2 ');

        $employees =   employe::orderBy('id','desc')->where('deleted','2')->paginate(5);
        //    dd($client);
        // if(!$client){
        //      echo "not" ;
        //   }else{
        //      echo "empty" ;
        //  }
        return view('/employees', compact('employees'));
    }

    public function addemployee(){
        return view ('/addemployee');
    }

    public function employeeStore(Request $request){

        //  $product = new product();
        $employee = new employe();

        $this->validate($request,[
            'name'=> 'required',
            'address'=> 'required',
        ]);

        $employee->name = $request->name;
        $employee->address = $request->address;
        $employee->deleted = 2;
        $employee->created_by = Auth::user()->name ;
        $employee->status = $request->active;
        $employee->save();
        $id = $employee->id;

        return redirect('/employees')->with('success','You have add Successfully .');

    }

    public function editemployee($id){
        $employee = employe::find($id);

        return view ('/editemployee',compact('employee'));
    }

    public function updateemployee(Request $request ,$id){

        $employee = employe::find($id);

        /*php artisan storage:link*/
        /*use Illuminate\Support\Facades\Storage;*/
        $employee->name =$request->input('name');
        $employee->address =$request->input('address');
        $employee->updated_by = Auth::user()->name;
        $employee->status = $request->input('active');
        $employee->save();

        return redirect('/employees')->with('success','You have Updated Successfully .');
    }

    public function deleteemployee($id){
        $employee = employe::find($id);
        $employee->deleted = 1;
        $employee->save();
        return redirect ('employees');
    }

    /*------------------------------- handle Data Home Page --------------------------------------*/
    public function getdata(Request $request){
       $from1 = $request->from1;
        $to1 = $request->to1;
        $search = DB::table('products')->whereBetween('created_at', [$from1, $to1])->where('deleted',2)->where('status',2)->get();

        $from2 = $request->from2;
        $to2 = $request->to2;
        $data = DB::table('suplayer_products')->join('supplayers','supplayers.id','=','supplayers_id')->join('products','products.id','=','products_id')->whereBetween('suplayer_products.created_at', [$from2, $to2])->where('products.deleted',2)->where('products.status',2)->get();

        $from3 = $request->from3;
        $to3 = $request->to3;
        $clients = DB::table('clients')->join('products','products.id','=','product_id')->whereBetween('clients.created_at', [$from3, $to3])->where('products.deleted',2)->where('products.status',2)->get();

       //  dd($clients);
      /* if(count($search) > 0){
            echo " have data";
        }else{
            echo "no have data";
        }*/
        return view ('/getdata',compact('search','data','clients'));
    }


/*----------------------------------------- Excel Export ---------------------------------------------------*/
    public function excel_products()
    {

        return \Excel::download(new Exports\products(), 'products.xlsx');
    }

    public function excel_supplayers()
    {

        return \Excel::download(new Exports\supplayers(), 'supplayers.xlsx');
    }

    public function excel_clients()
    {

        return \Excel::download(new Exports\clients(), 'clients.xlsx');
    }

    public function excel_emp()
    {

        return \Excel::download(new Exports\emp(), 'empployee.xlsx');
    }


}

