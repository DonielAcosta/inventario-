@extends("Templade.Templade")

@section("title","user")

@section("body")
    <h3>user</h3>
	<div class="dropdown-menu">
		<form class="px-4 py-3" action="{{route('Login.index')}}" method="get">
			@csrf
			<input type="text" class="form-control" name="texto" value="{{$texto}}">

			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" placeholder="email@example.com">
			</div>
			<div class="form-group">
				<label for="exampleDropdownFormPassword1">Password</label>
				<input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="dropdownCheck">
				<label class="form-check-label" for="dropdownCheck">
			        Remember me
			    </label>'
			</div>
			<button type="submit" class="btn btn-primary">Sign in</button>
		</form>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">New around here? Sign up</a>
		<a class="dropdown-item" href="#">Forgot password?</a>
    </div>
</div>
@endsection
