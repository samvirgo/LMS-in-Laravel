<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width ,  initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}">
	<script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
	<link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
	@yield('style')
</head>
<body>
<div class="container">
<div class="row , header" >
<div class="col-md-2">
	<img id="logo" src="{!! asset('logo/picture.png') !!}">
	<div class="clearfix"></div>
</div>



<div class="col-md-9">

<h1><b>KU Library Management System</b></h1></div>
<div><div class="col-md-1"><button type="button" class="btn btn-primary" id="logout" name="log out" ><a href="home">logout</a>
<span class="glyphicon glyphicon-play"></span></button></div></div>
</div>

	<div class="row">
		<div class="col-md-2 , sb">
			<div class="text-center"><a href="{{url('searchbook') }}"><span class="glyphicon glyphicon-search , one"></span><span class="glyphicon glyphicon-book , two"></span><br>Search Books</a></div>
			<hr>
			<div class="text-center">
			<a href="{{url('search') }}"><span class="glyphicon glyphicon-search , one"><span class="glyphicon glyphicon-user , two"></span></span><br>Search Students</a>
			</div>
			<hr>

			<div class="text-center">
			
				<a href="{{ url('student/create') }}"><span class="glyphicon glyphicon-user , one"><span class="glyphicon glyphicon-plus"></span></span><br>Add Students</a>
							</div>
			
			<hr>
			<div class="text-center">
				<a href="{{ url('student') }}"><span class="glyphicon glyphicon-user ," id="one"><span class="glyphicon glyphicon-user" id="two"></span><span id="three" class= "glyphicon glyphicon-user"></span></span><br>All Registered Students</a>
			</div>
			<hr>
			<div class="text-center">
				<a href="{{ url('book/create') }}"><span class="glyphicon glyphicon-plus-sign , one"></span><span class="glyphicon glyphicon-book , two"></span><br>Add Books</a>
			</div>
			<hr>
			<div class="text-center">
				<a href="{{ url('book') }}"><span class="glyphicon glyphicon-list  , one"></span>
				<span class="glyphicon glyphicon-book , two"></span><br>
				List All Books In Library</a>
			</div>
		</div>
		<div class="col-md-8">


			@yield('content')
		</div>
		<div class="col-md-2 , sb">
			<div class="text-center">
				<a href="{{('issueBooks')}}"><span class="glyphicon glyphicon-forward , one"></span><br>Issue Books</a>
			</div>
			<hr>
			<div class="text-center">
				<a href="{{('returnBooks')}}"><span class="glyphicon glyphicon-backward , one"></span><br>Return Books</a>
			</div>
			<hr>
			<div class="text-center">
				<a href="{{('issueBooksHistory')}}"><span class="glyphicon glyphicon-forward , one"></span><span class="glyphicon glyphicon-repeat , two"></span><br>Issue Books History</a>
			</div><hr>
			<div class="text-center">
				<a href="{{('returnBooksHistory')}}"><span class="glyphicon glyphicon-backward , one"></span>
				<span class="glyphicon glyphicon-repeat , two"></span><br>Return Books History</a>
			</div>
		</div>
	</div>
</div>

</body>
</html>