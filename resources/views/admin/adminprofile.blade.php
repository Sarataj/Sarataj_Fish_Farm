@php
    $admin_id=Session::get('admin_id');
    $admin_info=DB::table('admin_tbl')
            ->where('admin_id',$admin_id)
            ->first();

@endphp



@extends ('layout')

@section('content')


          <div class="row user-profile">
            <div class="col-lg-24 side-left">
              <div class="card mb-12">
                <div class="card-body avatar" style="background-color:grey">
                  <h1 class="card-title">Admin Profile</h1><br>
                  
                 <p class="name">Name:  {{$admin_info->admin_name}}</p>
                  <p class="email">Email: {{$admin_info->admin_email}}</p>
                  <a class="number">Phone: {{$admin_info->admin_phone}}</a>
                 
                </div>
              </div>
 
               
              </div>
            </div>
            
          </div>
        





@endsection