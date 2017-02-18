@extends('layouts.hw22feb')

@section('title', 'printPrime')

@section('sidebar')      
  @parent
  <font style="color: red"><br>printPrime</font>
@endsection
@section('content')    
  Prime numbers between 1 to {{$n}} are :
  @for($i=0;$i<count($p_prime);$i++)
  	{{$p_prime[$i]." "}}
  @endfor
@endsection