@extends('layout')

@section('content')
	<div class="container">	
		<div class="row">
			<div class="col col-md-4">
				<nav class="panel panel-default">
					<div class="panel-heading">REGITER</div>	
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
						<form action="{{ route('register') }}" method="POST">
						@csrf
							<div class="form-group">
								<label for="email">email</label>
								<input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
							</div>
							<div class="form-group">
								<label for="name">name</label>
								<input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
							</div>

							<div class="form-group">
								<label for="password">password</label>
								<input type="password" class="form-control" name="password" id="password">
							</div>
							<div class="form-group">
								<label for="password-confirm">password-confirm</label>
								<input type="password" class="form-control" name="password_confirmation" id="password-confirm">
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

