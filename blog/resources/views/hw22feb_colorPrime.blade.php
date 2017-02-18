@extends('layouts.hw22feb')

@section('title', 'colorPrime')

@section('sidebar')      
  @parent
  <font style="color: red"><br>colorPrime</font>
@endsection
@section('content')    
  Prime numbers between 1 to {{$n}} are :
  @for($i=1;$i<=count($p_prime);$i++)
  	@if($i==1 || $i==count($p_prime)) <font color="red">{{$p_prime[$i]." "}}</font>
  	@elseif($i%2==0) <font color="greed">{{$p_prime[$i]." "}}</font>
  	@elseif($i%5==0) <font color="blue">{{$p_prime[$i]." "}}</font>
  	@else {{$p_prime[$i]." "}}
  	@endif
  @endfor
@endsection