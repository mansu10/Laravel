@extends('_layout')

@section('content')
<div>
	<div>
		{{ $device->type }}
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('/js/Chart.js') }}"></script>
@endsection