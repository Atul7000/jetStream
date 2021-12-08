<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use Illuminate\Support\Facades\Http;
use App\Models\record;


class UserController extends Controller
{
    //*Controller*
    // function show($id)
    // {
    //     return $id;
    // }

    // *View*
    // function loadview($user){
    //     return view('users',['name'=>$user]);
    // }

    // *Blade*
    // function loadview(){
    //     $data = ['atul','adi','ram'];
    //     return view("users",["users"=>$data]);
    // }

    // *Form*
    // function getData(Request $req){
    //     return $req->input();
    // }

    // *Db connection*
    // function index(){
    //    return DB::select("select * from users");
    // }

    // *Model*
    // function getData(){
    //     return user::all();
    // }

    // *Http Client*
    // function index(){
    //     $data = Http::get("https://reqres.in/api/users?page=1");
    //     return view('users',['collection'=>$data['data']]);
    // }

    // *Http Request Method*
    // function testRequest(Request $req){
    //     return $req->input();
    // }

    // *Session*
    //  function userLogin (Request $req){
    //      $data = $req->input('user');
    //      $req->session()->put('user',$data);
    //      return redirect('profile');
    //  }

    // *Flash Session*
    // function storeM(Request $req){
    //     $data =  $req->input('user');
    //     $req->session()->flash('user',$data);
    //     return redirect('store');
    // }

    // *File Upload*
    // function index(Request $req){
    //     return $req->file('doc')->store('img');
    // }

    // *Save Data*
    // function addData(Request $req){
    //     $member = new record;
    //     $member->Name = $req->Name;
    //     $member->Email = $req->Email;
    //     $member->Address = $req->Address;
    //     $member->save();
    //     return redirect('add');
    // }

    // *pagination*
    // function show(){
    //     $data = record::paginate(5);
    //     return view('list',['records'=>$data]);
    // }

    // *Show Data*
    // function show(){
    //     $data = record::all();
    //     return view('list',['records'=>$data]);
    // }
    
    // *Delete*
    // function list(){
    //     $data = record::all();
    //     return view('list',['records'=>$data]);
    // }
    // function delete($Id){
    //     $data = record::find($Id);
    //     $data->delete();
    //     return redirect('list');
    // }

    // *Update*
    // function showData($Id){ 
    //     $data = record::find($Id);
    //     return view('edit',['data'=>$data]);
    // }
    // function update(Request $req){
    //     $data = record::find($req->Id);
    //     $data->Name = $req->Name;
    //     $data->Email = $req->Email;
    //     $data->Address = $req->Address;
    //     $data->save();
    //     return redirect('list');
    // }

    // *Query Builder*
    // function oprations(){
    //     return DB::table('records')
    //     ->where('id',66)->delete();
        // ->where('id',65)
        // ->update([
        //     'name'=>'atul',
        //     'email'=>'adi@gmail.com',
        //     'address'=>'UK'
        // ]);
        // ->insert([
        //     'name'=>'adi',
        //     'email'=>'adi@gmail.com',
        //     'address'=>'UK'
        // ]);
        // ->count();
        // ->where('address','ind')
        // ->get();
    // }
    
    // *Aggregate methods*
    //  function oprations(){
    //     return DB::table('records')->max('name');
    //     // return DB::table('records')->select(DB::raw("min('id') as min_price, max('id') as max_price"))->get();
    //     // DB::table('records')->select(DB::raw("min('name') as name, max('name') as name"))->get();
    //  }

    // *Join*
    // function getData(){
    //     return DB::table('userdetails')
    //     ->join('company','userdetails.id','=','company.emp_id')
    //     // ->select('company.*','userdetails.*')
    //     ->where('userdetails.name','atul')
    //     ->get();
    // }

    

}
