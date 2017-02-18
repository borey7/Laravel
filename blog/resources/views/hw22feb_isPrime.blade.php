@extends('layouts.hw22feb')

@section('title', 'isPrime')

@section('sidebar')      
  @parent
  <font style="color: red"><br>isPrime</font>
@endsection
@section('content')    
  
  @if($ans == 0) {{$number}} is not prime number. 
  @else
    {{$number}} is a prime number.
  @endif

@endsection