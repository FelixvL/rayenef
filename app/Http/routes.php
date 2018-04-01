<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
use App\Student;
use Illuminate\Http\Request;

Route::get('/', function () {
    return "Website Check Raymond Felix";
});
Route::get('/nieuwstudent',function(){
    $user = User::findOrFail(1);
    $student = new Student(['naam'=>'Felix van Loenen']);
    $user->student()->save($student);
    return "in voorbeeld";
});
Route::get('/eenstudentzoekenenwijzigen', function(){
    $student = Student::where('user_id', 1)->first();
    $student->naam = 'Raymond';
    $student->save();
    return $student;
});
Route::get('/probeerfrontend',function(){
    return view('trialfrontendincluded'); 
});
Route::post('/testpost',function(Request $request){
    $data = $request->json()->all();
    return "hallo allemaal".$data['hand'];
});