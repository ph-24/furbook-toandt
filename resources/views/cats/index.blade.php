@extends('layouts.master')

@section('header')
	@if(isset($breed))
		<a href="{{ url('/') }}">Back to the overview</a>
	@endif
	<h2>
		All @if (isset($breed)) {{$breed->name}} @endif
		Cats
		<a href="{{ url('cats/create') }}" class="btn btn-primary pull-right"><br>
			Add a new cat
		</a>
	</h2>
@stop
@section('content')
	@include('partials.cat')
@stop