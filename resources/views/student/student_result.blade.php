@extends ('student_layout')
@section('content')

<div class="row user-profile">
            <div class="col-lg-12 side-left">


              <div class="card mb-6">    
              <div class="card-body avatar">
                  <h2 class="card-title">Result</h2>
                  
                  <p class="name">{{$student_profile->student_name}}</p>
                  <p class="designation">Roll: {{$student_profile->student_roll}}</p>
                 
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  	<h1>Course Name: {{$student_profile->course_name}}
                  <br>
                      Marks:  <span>{{$student_profile->marks}}</span>
                   </h1> 
                  </div>
                </div>
              </div>
            </div>
            
          </div>




@endsection






