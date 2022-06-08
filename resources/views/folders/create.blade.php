@extends('layout')

@section('content')
	<div class="container">	
		<div class="row">
			<div class="col col-md-4">
				<nav class="panel panel-default">
					<div class="panel-heading">ADD Folder</div>	
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
						<form action="{{ route('folders.create') }}" method="POST">
						@csrf
							<div class="form-group">
								<label for="title">folder name</label>
								<input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
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

