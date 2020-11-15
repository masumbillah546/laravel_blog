<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
    	echo 'This is Home page';
    }


    public function getUrlData(Request $request){
        echo "Name: ".$request->name." <br> Age: ".$request->age;
    }

    public function form(){
    	return view('myform');
    }

    public function process(Request $r){

    	echo  'Name: '.$r->name."</br>";
    	echo  'Email: '.$r->email."</br>";
    	echo  'Phone: '.$r->phone."</br>";
        // echo  $r->method(),"<br>";
        // if ($r->isMethod('post')) {
        //     echo "Yes, this form used post method";
        // }
        // else{
        //     echo "No It's not Post Method";
        // }
    }

    public function dbquery(){
    	//get all record
    	//$rows=DB::table('students')->get();
    	//echo "<pre>";
    	//print_r($rows);
    	//return view('students', ['students'=>$rows]);
    	//$rows=DB::table('students')->where('name','Masum Billah')->first();
    	//$rows=DB::table('students')->pluck('name','email');
    	DB::table('students')->orderBy('id')->chunk(2, function ($students) {

    	//print_r($students);

    	});

    	//$rows=DB::table('students')->select('id', 'name')->get();
    	//$rows=DB::table('students')->distinct()->get(['name']);
    	$rows=DB::table('students')->join('contacts','contacts.student_id','=','students.id')->select('students.id','contacts.student_id','name','email','phone')->get();

    	//->join('contacts','students.id','=','contacts.student_id')->get(['name','email']);
    	
    	//print_r($rows);
         return view('studentlist', ['req'=>$rows]);

    }


    public function entry(){
        return view('studentsform');
    }
    public function insert(Request $req){
    // echo $view=$req->input('stname');
   $data1['name']=$req->input('stname');
   
        // DB::table("students")->insert(['name'=>$data]);
      //return view('studentview',['req'=>$id]);

       echo $id=  DB::table("students")->insertGetId($data1);

   $data2['student_id']=$id;
   $data2['email']=$req->input('email');
   $data2['phone']=$req->input('phone');

       DB::table("contacts")->insert($data2);
    }


    public function edit($id){

        $rows=DB::table('students')->join('contacts','contacts.student_id','=','students.id')->select('students.id','contacts.student_id','name','email','phone')->where('students.id',$id)->first();

        print_r($rows);

        return view('studentedit',['rows'=> $rows]);
    }

    public function update(Request $req){

        $id=$req->input('id');
        $name=$req->input('stname');
        $rows=DB::table('students')->where('id',$id)->update(['name'=>$name]);

echo 'update';
    }
}
