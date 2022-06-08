@extends('layout')

@section('content')
	<div class="container">	
		<div class="row">
			<div class="col col-md-4">
				<nav class="panel panel-default">
					<div class="panel-heading">PASSWORD REISSUE</div>	
					<div class="panel-body">
					@if(session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif
						<form action="{{ route('password.email') }}" method="POST">
						@csrf
							<div class="form-group">
								<label for="email">email</label>
								<input type="text" class="form-control" name="email" id="email" >
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

