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

Route::get('/', function () {



// $netwok =  App\Networks::find(1);
// $netwok->name = "Yousif";
// $netwok->save();
//  return $netwok->name;

// $netwok = new  App\Networks ;

//     $netwok->name = "Muhammed";
//     $netwok->lastname = "Essa"; 
//     $netwok->description= "Cisco";
//     $netwok->fullname= "Muhammed Essa Hameed";
//     $netwok->save();
 
 
 

//   Schema::create('programmers' , function($myTable)
//   {
//     $myTable->increments('id');
//     $myTable->string('name');
//     $myTable->string('lastname',30);
//     $myTable->string('description',500);
//     $myTable->date('created');
//     $myTable->string('age');
//     $myTable->timestamps();
//   });

/*Schema::table('programmers' , function($myTable)
{
    $myTable->dropColumn('age');
    $myTable->string('fullname');
 
});*/

// $student_names = array('Muhammed','Ahmed','Ali','Osama');

// return view('welcome' , array('country'=>'IRAQ','city'=>'Erbil'
// ,'phone'=>false , 'studentNames'=>$student_names));
 return view('welcome');
});



Route::get('signup', function () {
    return view('signup');
});
Route::get('blog', function () {
    return view('Blog');
});


Route::post('thanks', function () {
   
   
   $yourEmail = Input::get('email');
    return view('thanks')->with( 'yourEmail',$yourEmail );
});


Route::get('about/{myVariable}', function ($myVariable) {
    return $myVariable.' Welcome to   page';
});

Route::get('about/profile/{myVariable}', function ($myVariable) {
    return "Welcome $myVariable"   ;
});