<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();


class AdminController extends Controller
{
    
	public function admin_dashboard(){

		return view ('admin.dashboard');
	}


	//student login

	public function student_dashboard(){

		return view ('student.dashboard');
	}


	//Admin setting

		public function setting(){

		return view ('admin.setting');
	}

	//student setting

		public function studentsetting(){

			$student_id=Session::get('student_id');
			$studnet_description_view=DB::table('student_tbl')

			->select('*')
			->where('student_id',$student_id)
			->first();



	$manage_description_student=view('student.student_setting')
			->with('student_description_profile',$studnet_description_view);

		return view('student_layout')
				->with('student_setting',$manage_description_student);
	}
	

	//Admin logout

		public function logout()
		{
			Session::put('admin_name',null);
			Session::put('admin_id',null);

			return Redirect::to('/admin');

		}

		//student logout

		public function student_logout()
		{
			Session::put('student_name',null);
			Session::put('student_id',null);

			return Redirect::to('/');

		}

		//admin login

		public function login_dashboard(Request $request)
		{

			$email=$request->admin_email;
			$password=md5($request->admin_password);
			$result= DB::table('admin_tbl')
			->where ('admin_email',$email)
			->where ('admin_password',$password)
			->first();

			if ($result){
				Session :: put('admin_email',$result->admin_email);
				Session :: put('admin_id',$result->admin_id);
					return Redirect :: to ('/admin_dashboard');

			}

			else{

				Session :: put('exception','Email or Password Invalid');
				return Redirect::to('/admin');
			}
		}


		//student login

		public function student_login_dashboard(Request $request)
		{

			$email=$request->parent_email;
			$password=md5($request->parent_password);
			$result= DB::table('student_tbl')
			->where ('parent_email',$email)
			->where ('parent_password',$password)
			->first();

			if ($result){
				Session :: put('student_email',$result->student_email);
				Session :: put('student_id',$result->student_id);
					return Redirect :: to ('/student_dashboard');

			}

			else{

				Session :: put('exception','Email or Password Invalid');
				return Redirect::to('/');
			}
		}


		public function adminprofile(){

			return view ('admin.adminprofile');
		}


		public function result(){

		return view ('admin.result');
		}

		//result upload

		public function saveresult(Request $request){
		$data=array();
			$data['course_name']=$request->course_name;
			$data['student_roll']=$request->student_roll;
			$data['marks']=$request->marks;


					DB::table('result_tbl')->insert($data);
					Session::put('exception','Result uploaded Successfully!!');
					return Redirect::to('/result');
		}



		//student result view

		public function studentresult(){
			$student_id=Session::get('student_id');
			$student_profile=DB::table('student_tbl')
							->join('result_tbl','student_tbl.student_roll','=','result_tbl.student_roll')
							->select('student_tbl.*','result_tbl.course_name','result_tbl.marks')
							->where('student_id',$student_id)
							->first();

			$manage_student=view('student.student_result')
				   		   ->with('student_profile',$student_profile);
		return view('student_layout')
				->with('student_result',$manage_student);
		}


		//view all results

		public function allresults(){

		$allresults_info=DB::table('result_tbl')->get();
		$manage_result=view('admin.allresults')->with('allresults_info',$allresults_info);
		return view('layout')->with('allresults',$manage_result);
	}


	//result edit method

	public function resultedit($result_id){

		$student_result_view=DB::table('result_tbl')
			->select('*')
			->where('result_id',$result_id)
			->first();



	$manage_result=view('admin.result_edit')
			->with('student_result',$student_result_view);

		return view('layout')
				->with('result_edit',$manage_result);
	}


	//update result

	public function resultupdate(Request $request,$result_id){

		$data=array();
		$data['course_name']=$request->course_name;
		$data['student_roll']=$request->student_roll;
		$data['marks']=$request->marks;
		
		
		DB::table('result_tbl')
				->where('result_id',$result_id)
				->update($data);

		Session::put('exception','Result update Successfully!');
		return Redirect::to('/result');

	}
}
