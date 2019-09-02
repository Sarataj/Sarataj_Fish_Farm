@extends ('layout')

@section('content')

                        <div class="col-sm-6 col-md-3 grid-margin">
                          <div class="card">
                            <div class="card-body">
                              <h2 class="card-title">All Students</h2>
                              @php
                                $student=DB::table('student_tbl')
                                    ->count('student_id');
                              @endphp
                              <p style="font-family: cursive; font-size:30px; font-weight: bold; text-align: center;">{{$student}}</p>
                            </div>
                          </div>
                        </div>

            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Teachers</h2>
                  <p style="font-family: cursive; font-size:30px; font-weight: bold; text-align: center;">8</p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Available Teachers</h2>
                  <p style="font-family: cursive; font-size:30px; font-weight: bold; text-align: center;">1</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Number of Admin</h2>
                  <p style="font-family: cursive; font-size:30px; font-weight: bold; text-align: center;">1</p>
                </div>
              </div>
            </div>


            

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<style>
    html, body {
        background-color: #ffa;
        color: #436b61;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 100px;
        top: 48px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 150px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
          <div class="content">
                <div class="title l-b-md">
                         Parents Portal
                         <marquee behavior="scroll" direction="left"><h1><b>Welcome to this system</b></h1></marquee>
                </div>
            </div>

@endsection
