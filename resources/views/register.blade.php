<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<form action="{{ route('reg') }}" method="post" >
@csrf
Account <input type="text" name="acc" required>
<br>
@if (session('message1'))
    <span>{{session('message1')}}</span>
@endif
<br>
Password &nbsp <input type="password"  name="pass" required>
<br>
<br>
Cofirm Password &nbsp <input type="password"  name="cpass" required>
<br>
@if (session('message3'))
    <span>{{session('message3')}}</span>
@endif
<br>
<input type="submit"  name="regis" value="Register">
</form>

</body>

</html>

