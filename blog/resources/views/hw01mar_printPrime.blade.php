@extends('layouts.hw22feb')

@section('title', 'printPrime')

@section('sidebar')      
  @parent
  <font style="color: red"><br>printPrime</font>
@endsection
@section('content')   
	
  Prime numbers between 1 to {{Request::cookie('n')}} are :
  @for($i=0;$i<count(Request::cookie('p_prime'));$i++)
  	{{Request::cookie('p_prime')[$i]." "}}
  @endfor

@endsection