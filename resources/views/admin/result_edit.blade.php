@extends ('layout')

@section('content')


  <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Result update form</h2>
                          <p class ="alert-success"><?php
                                $exception= Session:: get('exception');

                                if($exception)
                                {
                                  echo $exception;
                                  Session :: put ('exception',null);

                                }
                              ?></p>

                          <form class="forms-sample" method="post" action="{{URL::to('/update_result',$student_result->result_id)}}">
                          	{{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Course Name</label>
                                  <input type="text" class="form-control p-input" name="course_name" aria-describedby="emailHelp" value="{{($student_result->course_name)}}">
                             </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" value="{{($student_result->student_roll)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Marks</label>
                                  <input type="text" class="form-control p-input" name="marks" value="{{($student_result->marks)}}">
                              </div>

                             

                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection