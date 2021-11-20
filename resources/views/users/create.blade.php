@extends('layout.backend')

@section('content')
	
	
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<div class="container">
		<form action="{{ route('users.store') }}" method="POST" novalidate>
			@csrf
			<div class="form-group">
				<input type="text" name="username" class="form-control"
				value="{{ old('username') }}" 	
				>

				<div class="error">{{ $errors->first('username') }}</div>

			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control"
				value="{{ old('email') }}" 	
				>

				<div class="error">{{ $errors->first('email') }}</div>
			</div>
			<div class="form-group">
				<input type="submit" value="Dang ky" class="btn btn-info">
			</div>
		</form>
	</div>
@endsection