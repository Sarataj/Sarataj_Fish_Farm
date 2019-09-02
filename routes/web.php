<?php


//logout
Route::get('/logout','AdminController@logout');
Route::get('/student_logout','AdminController@student_logout');

Route::get('/', function () {
    return view('student_login');
});

Route::get('/admin', function () {
    return view('admin.admin_login');
});

//Admin controller
Route::post('/adminlogin','AdminController@login_dashboard');
Route::post('/studentlogin','AdminController@student_login_dashboard');

//result upload
Route::get('/result','AdminController@result');
Route::post('/save_result','AdminController@saveresult');

//All Results view
Route::get('/allresults','AdminController@allresults');
//edit result
Route::get('/result_edit/{result_id}','AdminController@resultedit');
//update Result
Route::post('/update_result/{result_id}','AdminController@resultupdate');





Route::get('/student_dashboard','AdminController@student_dashboard');
Route::get('/adminprofile','AdminController@adminprofile');

Route::get('/admin_dashboard','AdminController@admin_dashboard');


Route::get('/student_result','AdminController@studentresult');

//Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/setting','AdminController@setting');
Route::get('/student_setting','AdminController@studentsetting');

//student profile
Route::get('/student_profile','AddstudentsController@studentprofile');
Route::get('/dashboard','AddstudentsController@studentprofile_2');


//addStudent
Route::get('/addstudent','AddstudentsController@addstudent');
Route::post('/save_student','AddstudentsController@savestudent');

//viewStudent
Route::get('/student_view/{student_id}','AllstudentsController@studentview');

//editStudent
Route::get('/student_edit/{student_id}','AllstudentsController@studentedit');
//update student(admin)
Route::post('/update_student/{student_id}','AllstudentsController@studentupdate');
//update student(student own)
Route::post('/student_own_update','AllstudentsController@studentownupdate');

//deleteStudent
Route::get('/student_delete/{student_id}','AllstudentsController@studentdelete');

//allstudent
Route::get('/allstudent','AllstudentsController@allstudent');
