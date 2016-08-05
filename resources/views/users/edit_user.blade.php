@extends('master_layout.master_page_layout')
@section('content')
  <!--breadcrumbs start-->
  <div id="breadcrumbs-wrapper">
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l12">
          <h4>{{$title}}</h4>
        </div>
      </div>
    </div>
  </div>
  <!--breadcrumbs end-->
        

  <!--start container-->
  <div class="container">
    <div class="section">
      <!--DataTables example-->
      <div id="table-datatables">
        <h4 class="header">Update User</h4>
        <div class="row">
          <div class="col s12 m12 l12">
            <!--Basic Form-->
            <div id="basic-form" class="section">
              <div class="row">
                <div class="col s12 m12 l12">
                  <div class="card-panel">
                    <h4 class="header2">User Information</h4>
                    <div class="row">
                      {!! Form::model($user, ['method'=>'PATCH','action' => ['Users\UserController@update',$user->id] , 'class' => 'col s12']) !!}
                          @include('users.user_form',['submitButton'=>'Update User'])
                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <br>
      </div>
    </div>
  </div>
  <!--end container-->
@endsection