@extends('master')

@section('content')
	<h2>List of Pets</h2>
	<hr>
	@foreach ($pets as $pet)
		<div class="pet">
			<strong> {{$pet->name}} </strong> - {{$pet->age}} - {{$pet->pettype->name}}
		</div>
	@endforeach

	<p>There are currently {{count($pets)}} pets on this site!</p>

	<p>Eloquent ORM practice links</p>
	<ul>
		<li><a href="{{URL::to('pets')}}">Show all pets</a></li>
		<li><a href="{{URL::to('pets/pettype/dog')}}">Show only dogs</a></li>
		<li><a href="{{URL::to('pets/ordered')}}">Order by age</a></li>
	</ul>
@stop