<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AllstudentsController extends Controller
{
    public function allstudent(){

		$allstudent_info=DB::table('student_tbl')->get();
		$manage_student=view('admin.allstudent')->with('all_student_info',$allstudent_info);
		return view('layout')->with('allstudent',$manage_student);
	}

//student delete method
	public function studentdelete($student_id){

		DB::table('student_tbl')
				->where('student_id',$student_id)
				->delete();

				return Redirect::to('/allstudent');

	}


//student information view method

	public function studentview($student_id){

		$studnet_description_view=DB::table('student_tbl')
			->select('*')
			->where('student_id',$student_id)
			->first();



	$manage_description_student=view('admin.view')
			->with('student_description_profile',$studnet_description_view);

		return view('layout')
				->with('view',$manage_description_student);
	}



//student information edit method

	public function studentedit($student_id){

		$studnet_description_view=DB::table('student_tbl')
			->select('*')
			->where('student_id',$student_id)
			->first();



	$manage_description_student=view('admin.student_edit')
			->with('student_description_profile',$studnet_description_view);

		return view('layout')
				->with('student_edit',$manage_description_student);
	}


//update student by admin

	public function studentupdate(Request $request,$student_id){

		$data=array();
		$data['student_name']=$request->student_name;
		$data['student_roll']=$request->student_roll;
		$data['student_email']=$request->student_email;
		$data['student_phone']=$request->student_phone;
		$data['student_address']=$request->student_address;
		$data['student_password']=$request->student_password;
		
		$data['parent_name']=$request->parent_name;
		$data['parent_email']=$request->parent_email;
		

		DB::table('student_tbl')
				->where('student_id',$student_id)
				->update($data);

		Session::put('exception','Student update Successfully!');
		return Redirect::to('/allstudent');

	}


	//student own update

	public function studentownupdate(Request $request){

		$student_id=Session::get('student_id');
		$data=array();
		$data['student_phone']=$request->student_phone;
		$data['student_email']=$request->student_email;
		$data['student_password']=$request->student_password;
		
		DB::table('student_tbl')
				->where('student_id',$student_id)
				->update($data);

		Session::put('exception','Student update Successfully!');
		return Redirect::to('/student_setting');

	}


}