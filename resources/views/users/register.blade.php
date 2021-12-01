<h1>Register</h1>
<form method="POST" action="{{ route('users.postRegister') }}">
	@csrf
	<input type="email" name="email"> <br>
	<input type="password" name="password"> <br>
	<input type="submit" value="Register" > <br>

</form>