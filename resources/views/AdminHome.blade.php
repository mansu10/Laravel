@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">后台首页</div>

        <div class="panel-body">
          <div class="content">
              <p>yaps</p>
              @foreach ($devices as $device)
                <hr>
                <div>
                  <h4>{{ $device->uid }}</h4>
                  <p></p>
                </div>
              @endforeach  
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection