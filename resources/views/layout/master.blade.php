<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style>
body{
	background:green;
}
</style>
<body>
<h1>Hello Nilam</h1>
@include('layout.sidebar')
@yield('content')

@extends('dashbord.index')
@stop

</body>
</html>