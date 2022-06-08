@extends('layout')

@section('content')
	<div class="container">	
		<div class="row">
			<div class="col col-md-4">
				<nav class="panel panel-default">
					<div class="panel-heading">Let's make Folder</div>	
					<div class="panel-body">
						<a href="{{ route('folders.create') }}" class="btn btn-primary">
							To Make Folder
						</a>
					</div>
				</nav>
			</div>
		</div>
	</div>
@endsection

