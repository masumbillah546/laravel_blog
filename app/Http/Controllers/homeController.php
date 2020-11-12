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
    	echo "<pre>";
    	//print_r($rows);
    	//return view('students', ['students'=>$rows]);
    	//$rows=DB::table('students')->where('name','Masum Billah')->first();
    	//$rows=DB::table('students')->pluck('name','email');
    	DB::table('students')->orderBy('id')->chunk(2, function ($students) {

    	//print_r($students);

    	});

    	//$rows=DB::table('students')->select('id', 'name')->get();
    	//$rows=DB::table('students')->distinct()->get(['name']);
    	$rows=DB::table('students')
    	//->join('contacts','students.id','=','contacts.student_id')->get(['name','email']);
    	->join('contacts','contacts.student_id','=','students.id')->select('students.id','contacts.student_id','name','email')->get();
    	print_r($rows);

    }


    public function stForm(){
        return view('studentsform');
    }
    public function insert(Request $req){
    // echo $view=$req->input('stname');
      return view('studentview',['req'=>$req]);
    }
}
