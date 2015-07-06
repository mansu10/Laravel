@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					新增
				</div>
				<div class="panel-body">
					@if(count($errors) > 0)
					<div class="alert alert-danger">
						<p>There were some problem</p>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					<form action="{{ URL('admin/devices') }}" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="text" name="uid" class="form-control" required="required">
						<br />
						<input type="text" name="type" class="form-control" required="required">
						<br />
						<button class="btn btn-lg btn-info">新增设备</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection