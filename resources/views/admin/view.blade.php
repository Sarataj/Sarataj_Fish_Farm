@extends ('layout')
@section('content')


          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_description_profile->student_image)}}">
                  <p class="name">{{$student_description_profile->student_name}}</p>
                  <p class="designation">Roll: {{$student_description_profile->student_roll}}</p>
                  <a class="email">Email: {{$student_description_profile->student_email}}</a>
                  <a class="number">Phone: {{$student_description_profile->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  

                  	<h1>Daffodil International University</h1>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">Student's Information Management System</h2>
                    <p>All information of student is given bellow.(All Rights are Reserved and We don't share any personal information to others!) </p>
                  </div>
                  <div class="info-links">
                    
                    <a class="website">
                      <i class="icon-globe icon">Address:</i>
                      <span>{{$student_description_profile->student_address}}</span>
                    </a>
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        


@endsection