@extends('layout')

@section('content')
	<h1>principal</h1>
	@auth
	{{auth()->user()->name}}
	@endauth
@endsection
