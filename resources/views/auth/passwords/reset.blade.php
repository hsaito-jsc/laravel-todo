@extends('layout')

@section('content')
	<div class="container">	
		<div class="row">
			<div class="col col-md-4">
				<nav class="panel panel-default">
					<div class="panel-heading">PASSWORD REISSUE</div>	
					<div class="panel-body">
						<form action="{{ route('password.update') }}" method="POST">
						@csrf
							<div class="form-group">
								<label for="email">email</label>
								<input type="text" class="form-control" name="email" id="email" >
							</div>
							<div class="form-group">
								<label for="password">new password</label>
								<input type="password" class="form-control" name="password" id="password">
							</div>
							<div class="form-group">
								<label for="password-confirm">new password comfirm</label>
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

