@extends('layouts.hw22feb')

@section('title', 'hw22feb')

@section('sidebar')      
  @parent
  <font style="color: red"><br>hw22feb</font>
@endsection
@section('content')    
    <form action="/hw22feb_isPrime" method="POST" role="form">
      <legend>isPrime</legend>
      <div class="form-group">        
        <input type="text" class="form-control" name="number" id="mytext" placeholder="Input field">        
      </div>       
      <button type="submit" class="btn btn-primary">Check</button>
      {{ csrf_field() }}
    </form>

    <form action="/hw22feb_printPrime" method="POST" role="form">
      <legend>printPrime</legend>
      <div class="form-group">        
        <input type="text" class="form-control" name="number" id="mytext" placeholder="Input field">
      </div> 
      <button type="submit" class="btn btn-primary">Print</button>
      {{ csrf_field() }}
    </form>
        
    <form action="/hw22feb_colorPrime" method="POST" role="form">
      <legend>colorPrime</legend>
      <div class="form-group">        
        <input type="text" class="form-control" name="number" id="mytext" placeholder="Input field">
      </div> 
      <button type="submit" class="btn btn-primary">Print</button>
      {{ csrf_field() }}
    </form>
@endsection