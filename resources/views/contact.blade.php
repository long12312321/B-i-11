<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Language
  <span class="caret"></span></button>
  <ul class="dropdown-menu ">
    <li><a href="{{ route('lan',['en'])}}" class="dropdown-item " selected>English</a></li>
    <li><a href="language/vi" class="dropdown-item ">VietNamese</a></li>
    
  </ul>
</div>
<form action="{{ route('add') }}" method="post" >
@csrf
@if(isset($data))
@foreach($data as $data)
  {{__('language.name_id')}} &nbsp <input type="text" name="name_id" value="{{$data->id}}" required>
@endforeach
@else
{{__('language.name_id')}} &nbsp <input type="text" name="name_id" value="" required>
@endif
<br>
<br>
{{__('language.name')}} &nbsp <input type="text" id="name" name="name" required>
<br>
<br>
{{__('language.address')}} &nbsp <input type="text" id="address" name="address" required>
<br>
<br>
{{__('language.email')}} &nbsp <input type="text" id="email" name="email" required>
<br>
<br>
{{__('language.content')}} &nbsp <input type="text" id="content" name="content" required>


<br>
<br>
<input type="submit"  name="create" value="{{__('language.create')}}">
</form>
<a href="{{ route('logout')}}">LogOut</a>
<br>
<br>

</body>

</html>



