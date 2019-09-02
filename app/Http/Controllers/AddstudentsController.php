<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AddstudentsController extends Controller
{

	public function addstudent(){

		return view ('admin.addstudent');
	}
 
	//save student 
	public function savestudent(Request $request){
		$data=array();
			$data['student_name']=$request->student_name;
			$data['student_roll']=$request->student_roll;
			$data['student_email']=$request->student_email;
			$data['student_phone']=$request->student_phone;
			$data['student_address']=$request->student_address;
			$image=$request->file('student_image');
			$data['student_password']=md5($request->student_password);
			$data['parent_name']=$request->parent_name;
			$data['parent_email']=$request->parent_email;
			$data['parent_password']=md5($request->parent_password);


		if ($image){
			$image_name=str_random(20);
			$ext=strtolower($image->getClientoriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='image/';
			$image_url=$upload_path.$image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			if($success){
				$data['student_image']=$image_url;

					DB::table('student_tbl')->insert($data);
					Session::put('exception','Student Added Successfully!!');
					return Redirect::to('/addstudent');
						
			}
		}
		$image_url = null;
		$data['student_image']=$image_url; 
			DB::table('student_tbl')->insert($data);
					Session::put('exception','Student Added Successfully!!');
					return Redirect::to('/addstudent');

				DB::table('student_tbl')->insert($data);
					Session::put('exception','Student Added Successfully!!');
					return Redirect::to('/addstudent'); 
		
	}

		//view profile
	
		public function studentprofile(){

			$student_id=Session::get('student_id');
			$student_profile=DB::table('student_tbl')
							->select('*')
							->where('student_id',$student_id)
							->first();


			$manage_student=view('student.student_view')
				   		   ->with('student_profile',$student_profile);
		return view('student_layout')
				->with('student_view',$manage_student);
	}

	
	public function studentprofile_2(){

		$student_id=Session::get('student_id');
		$student_profile=DB::table('student_tbl')
						->select('*')
						->where('student_id',$student_id)
						->first();


		$manage_student=view('student.dashboard')
						  ->with('student_profile',$student_profile);
	return view('student_layout')
			->with('dashboard',$manage_student);
}
	


}
