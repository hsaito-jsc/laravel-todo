@extends('layout')

@section('styles')
	@include('share.flatpickr.styles')
@endsection

@section('content')
	<div class="container">	
		<div class="row">
			<div class="col col-md-4">
				<nav class="panel panel-default">
					<div class="panel-heading">ADD Task</div>	
					<div class="panel-body">
					@if($errors->any())
						<div class="alert alert-danger">
							<ul>
							@foreach($errors->all() as $message)
								<li>{{ $message }}</li>
							@endforeach
							</ul>
						</div>
					@endif
						<form action="{{ route('tasks.create', ['id' => $folder_id]) }}" method="POST">
						@csrf
							<div class="form-group">
								<label for="title">title</label>
								<input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
							</div>
							<div class="form-group">
								<label for="due_date">due_date</label>
								<input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}">
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary">submit</button>
							</div>
						</form>
					</div>
				</nav>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	@include('share.flatpickr.scripts')
@endsection
