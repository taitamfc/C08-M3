<!-- Ke thua lai layout -->
@extends('layout.frontend')

<!-- Dua noi dung vao yield('content') -->
@section('content')
	@php
		
	@endphp

<!-- 	@foreach($numbers as $number)
		@include('users.item')
	@endforeach -->

	@each('users.item',$numbers,'number')

	
	<table class="table">
		<tr>
			<td>1</td>
			<td>1</td>
			<td>1</td>
			<td>1</td>
			<td>1</td>
		</tr>
	</table>
@endsection