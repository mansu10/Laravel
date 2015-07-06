@extends('_layout')

@section('content')
<div class="page-header">
    <p>breadcrumb</p>
</div>
<div class="content-panel">
    <div class="item-wrapper">
        <p>yaps</p>
        @foreach ($devices as $device)
        <div class="item-list">
            <div class="item-detail">
                <h4>{{ $device->uid }}</h4>
                <a href="{{ url('/admin/devices/detail/'.$device->uid) }}">link</a>
                <p>describtion</p>
            </div>
        </div>
         @endforeach
    </div>
</div>
@endsection