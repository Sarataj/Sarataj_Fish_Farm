@extends ('layout')

@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><center>All Results</center></h2>

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
                          <th>Course Name</th>
                          <th>Student Roll</th>
                          <th>Marks</th> 
                         <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($allresults_info as $r_student)
                      <tr>
                          <td>{{$r_student->course_name}}</td>
                          <td>{{$r_student->student_roll}}</td>
                          <td>{{$r_student->marks}}</td>
                          
 	
                          </td>
                         
                          <td>
                            
                           <a href="{{(URL::to('/result_edit/'.$r_student->result_id))}}"> <button class="btn btn-outline-warning">Edit</button></a>
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