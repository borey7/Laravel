@extends('layouts.hw22feb')

@section('title', 'isPrime')

@section('sidebar')      
  @parent
  <font style="color: red"><br>isPrime</font>
@endsection
@section('content')    
  
  @if (Session::has('ans'))
	@if( Session::get('ans') == 0 )
		{{ Session::get('number') }} is not prime number. 
	@else
		{{ Session::get('number') }} is a prime number. 
	@endif
	@endif
@endsection