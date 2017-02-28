@extends('layouts.hw22feb')

@section('title', 'hw01mar')

@section('sidebar')      
  @parent
  <font style="color: red"><br>hw01mar</font>
@endsection
@section('content')    
    <form action="/hw01mar_isPrime" method="POST" role="form">
      <legend>isPrime</legend>
      <div class="form-group">        
        <input type="text" class="form-control" name="number" id="mytext" placeholder="Input field">        
      </div>       
      <button type="submit" class="btn btn-primary">Check</button>
      {{ csrf_field() }}
    </form>

    <form action="/hw01mar_printPrime" method="POST" role="form">
      <legend>printPrime</legend>
      <div class="form-group">        
        <input type="text" class="form-control" name="number" id="mytext" placeholder="Input field">
      </div> 
      <button type="submit" class="btn btn-primary">Print</button>
      {{ csrf_field() }}
    </form>
        
    <form action="/hw01mar_colorPrime" method="POST" role="form">
      <legend>colorPrime</legend>
      <div class="form-group">        
        <input type="hidden" value="13" class="form-control" name="number" id="mytext" placeholder="Input field">
      </div> 
      <button type="submit" class="btn btn-primary">Print</button>
      {{ csrf_field() }}
    </form>
@endsection