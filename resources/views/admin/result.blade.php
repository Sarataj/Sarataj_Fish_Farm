@extends ('layout')

@section('content')





<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Result Upload</h2>
                          <p class ="alert-success"><?php
                                $exception= Session:: get('exception');

                                if($exception)
                                {
                                  echo $exception;
                                  Session :: put ('exception',null);

                                }
                              ?></p>

                          <form class="forms-sample" method="post" action="{{URL::to('/save_result')}}" enctype="multipart/form-data">
                          	{{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Course Name</label>
                                  <input type="text" class="form-control p-input" name="course_name" aria-describedby="emailHelp" placeholder="Enter name of course">
                             </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" placeholder="Roll">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Marks</label>
                                  <input type="text" class="form-control p-input" name="marks" placeholder="Marks">
                              </div>

                            
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>




@endsection