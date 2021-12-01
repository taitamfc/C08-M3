<h1>Login</h1>
<form method="POST" action="{{ route('users.postLogin') }}">
	@csrf
	<input type="email" name="email"> <br>
	<input type="password" name="password"> <br>
	<input type="submit" value="Login" > <br>

</form>