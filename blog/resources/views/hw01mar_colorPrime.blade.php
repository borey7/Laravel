@extends('layouts.hw22feb')

@section('title', 'colorPrime')

@section('sidebar')      
  @parent
  <font style="color: red"><br>colorPrime</font>
@endsection
@section('content')    

  Prime numbers between 1 to @if (Session::has('n')) {{Session::get('n')}} @endif are :

  @for($i=1; $i <= count(Session::get('p_prime'));$i++)
  	@if($i==1 || $i == count(Session::get('p_prime'))) 
      <font color="red">{{ Session::get('p_prime')[$i]." "}}</font>
  	@elseif($i%2==0)
      <font color="greed">{{ Session::get('p_prime')[$i]." "}}</font>
  	@elseif($i%5==0)
      <font color="blue">{{ Session::get('p_prime')[$i]." "}}</font>
  	@else 
      {{ Session::get('p_prime')[$i]." "}}
  	@endif
  @endfor

@endsection