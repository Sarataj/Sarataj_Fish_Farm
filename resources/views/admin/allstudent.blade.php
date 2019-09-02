@extends ('layout')

@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Information & Details</h2>

              <p class ="alert-success"><?php
                                $exception= Session:: get('exception');

                                if($exception)
                                {
                                  echo $exception;
                                  Session :: put ('exception',null);

                                }
                              ?></p>

              <div class="row">
                <div class="col-20">
                  <table id="order-listing"  style="width:100%;">
                    <thead>
                      <tr>
                          <th>Student's Name</th>
                          <th>Roll Number</th>
                          <th>Email Address</th>
                          <th>Phone Numeber</th>
                          <th>Address</th>
                          <th>Image</th>
                          <th>Parent Name</th>
                          <th>Parent Email</th>
                          
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($all_student_info as $v_student)
                      <tr>
                          
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_roll}}</td>
                          <td>{{$v_student->student_email}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          <td>{{$v_student->student_address}}</td>
                          <td><img src="{{URL::to($v_student->student_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
                          
                          <td>{{$v_student->parent_name}}</td>
                          <td>{{$v_student->parent_email}}</td>
                          

                          
                          <td>
                            <a href="{{(URL::to('/student_view/'.$v_student->student_id))}}"><button class="btn btn-outline-primary">View</button></a>
                            <a href="{{(URL::to('/student_edit/'.$v_student->student_id))}}"> <button class="btn btn-outline-warning">Edit</button></a>
                            <a href="{{URL::to('/student_delete/'.$v_student->student_id)}}"  id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
                   </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        

@endsection