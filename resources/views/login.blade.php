<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
@if (session('message2'))
    <span>{{session('message2')}}</span>
@endif
<form action="{{ route('lo') }}" method="post" >
@csrf
Account <input type="text" name="account" required>
<br>
<br>
Password &nbsp <input type="password"  name="password" required>
<br>
<br>
<input type="submit"  name="login" value="Login">
</form>
<a href="{{ route('re')}}">Create your Account</a>

</body>

</html>
