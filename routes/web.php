<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     //return view('welcome');
//     echo "This is about";
// });

Route::get('/contact', function () {
    //return view('welcome');
    echo "This is contact";
    $fatch=DB::select('select * from users where id = ?', array(1));
    echo "<pre>";
    print_r($fatch);


     $fatch2=DB::select('select * from users');

     foreach ($fatch2 as $value) {
     	echo $value->name;
     }
});


Route::post('foo', function(){
 print_r($_REQUEST);
});

Route::get('foo3', function(){
 echo '<form method="POST" action="foo">';
 echo 'Enter Name:<input type="text" name="name">';
 echo '<input type="submit">';
 echo csrf_field();
 echo '</form>';
 
});

// get the parameter of name
Route::get('students/{name}/{age}', function($name,$age) {
        echo "Students Name is  $name and he is $age years old";
}); 


//routing from controller class method
Route::get('/home','homeController@index');

Route::get('/geturldata', 'homeController@getUrlData');

Route::get('/stinfo', function () {

$val =['st1'=>"Masum Billah"];
    return view('info', $val);
   
});



Route::get('/', function () {
return view('pages.home');
});
Route::get('/about', function () {
return view('pages.about');
});
Route::get('/contact', function () {
return view('pages.contact');
});


Route::get('/profile', function () {
return view('mylayout.master');
});

Route::get('/getrequest','requestController@index');
Route::get('/getrequest/{name}/{age}','requestController@index');


Route::get('/myform','homeController@form');
Route::post('/process','homeController@process');
Route::get('/dbquery','homeController@dbquery');

Route::get('/entry','homeController@entry');
Route::post('/insert','homeController@insert');
Route::get('/edit/{id}','homeController@edit');
Route::post('/update','homeController@update');


Route::resource('sharks','sharksController');

