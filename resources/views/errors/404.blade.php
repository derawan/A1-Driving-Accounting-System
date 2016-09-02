@extends('master_layout.master_error_layout')
@section('content')
<div id="error-page">
  <div class="row">
    <div class="col s12">
      <div class="browser-window">
        <div class="top-bar">
          <div class="circles">
            <div id="close-circle" class="circle"></div>
            <div id="minimize-circle" class="circle"></div>
            <div id="maximize-circle" class="circle"></div>
          </div>
        </div>
        <div class="content">
          <div class="row">
            <div id="site-layout-example-top" class="col s12">
              <p class="flat-text-logo center white-text caption-uppercase">Sorry but we couldn’t find this page :(</p>
              <p class="center s12"><button onclick="goBack()" class="btn waves-effect waves-light">Back</button></p>
            </div>
            <div id="site-layout-example-right" class="col s12 m12 l12">
              <div class="row center">
                <h1 class="text-long-shadow col s12">404</h1>
              </div>
              <div class="row center">
                <p class="center white-text col s12">It seems that this page doesn’t exist.</p>
                <p class="center s12"><button onclick="goBack()" class="btn waves-effect waves-light">Back</button></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection