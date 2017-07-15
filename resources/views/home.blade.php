@extends('layout.master')
@section('title')
Home
@stop
@section('style')
<style type="text/css">
	.hone{
		font-size: 80px;
	}
	.hdiv{
		margin-top: 80px;
		float: left;
		background-color: lightblue;
		margin-left: 30px;
		padding: 15px;
	}
	.ha{
		font-size: 25px;
		margin-top: 0;
	}

</style>
@stop

@section('content')

<div class="text-center , hdiv">
	<a class="ha" href="#"><span class="glyphicon glyphicon-user . hone , ">10</span><br>Total Students</a>
</div>
<div class="text-center , hdiv">
	<a class="ha" href="#"><span class="glyphicon glyphicon-book , hone ">11</span><br>Total Books</a>
</div>
<div class="clearfix"></div>

@stop
