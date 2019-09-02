@extends ('layout')

@section('content')


  <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Information form</h2>
                          <p class ="alert-success"><?php
                                $exception= Session:: get('exception');

                                if($exception)
                                {
                                  echo $exception;
                                  Session :: put ('exception',null);

                                }
                              ?></p>

                          <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
                          	{{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter name">
                             </div>
                             <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp" placeholder="Enter roll number">
                             </div>

                             
                             <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp" placeholder="Enter email">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" placeholder="Enter your phone number">
                              </div>
                              <div class="form-group">
                                  <label for="exampleTextarea">Address</label>
                                  <textarea class="form-control p-input" name="student_address" rows="3"></textarea>
                              </div>
                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" placeholder="Password">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Parent Name</label>
                                  <input type="text" class="form-control p-input" name="parent_name" aria-describedby="emailHelp" placeholder="Enter name">
                             </div>

                             <div class="form-group">
                                  <label for="exampleInputEmail1">Parent Email</label>
                                  <input type="email" class="form-control p-input" name="parent_email" aria-describedby="emailHelp" placeholder="Enter email">
                                  
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Parent Password</label>
                                  <input type="password" class="form-control p-input" name="parent_password" placeholder="Password">
                              </div>

                        <!--
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" placeholder="Roll">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Fathers Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathersname" placeholder="Name of father">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Mothers Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothersname" placeholder="Name of mother">
                              </div>


                              <div class="form-group">
                                  <label for="exampleInputPassword1">Name of Department</label>
                                  <select class="form-control p-input" name="student_department">
                                  		<option value="1">SWE</option>
                                  		<option value="2">CSE</option>
                                  		<option value="3">EEE</option>
                                  		<option value="4">BBA</option>
                                  		<option value="5">TCE</option>
                                      </select>
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Year of Admission </label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="Enter Admission Year">
                              </div>
                              -->
                        

                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection