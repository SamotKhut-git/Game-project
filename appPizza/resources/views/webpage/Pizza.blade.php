@extends('layouts.layouts')
@section('container')

<h1 class="font-bold text-2xl mt-16">Today's Offer</h1>
<div class="container grid sm:grid-cols-3 gap-[50px] mt-7">
	@foreach($pizzas as $pizza)
	<a href="">
		<div class=" text-center bg-slate-200 shadow-md rounded-lg">
			<div class=" p-5 ">
				<img  class="rounded-lg" src="assets\{{$pizza->image}}" alt="{{$pizza->name}}">
				<p class="mt-5">{{$pizza->name}}</p>
			</div>
		</div>
	</a>
	@endforeach
@endsection