<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/css/app.css">

</head>
<body>
<div class="container">
  <br><br>
    <form action="/isPrime" method="POST" role="form">
      <legend>isPrime</legend>
      <div class="form-group">
        <label for="mytext">Input any number</label>
        <input type="text" class="form-control" name="number" id="mytext" placeholder="Input field">
      </div> 
      <button type="submit" class="btn btn-primary">Check</button>
      {{ csrf_field() }}
    </form>
    <form action="/printPrime" method="POST" role="form">
      <legend>printPrime</legend>
      <div class="form-group">
        <label for="mytext">Input any number</label>
        <input type="text" class="form-control" name="number" id="mytext" placeholder="Input field">
      </div> 
      <button type="submit" class="btn btn-primary">Print</button>
      {{ csrf_field() }}
    </form>
    <form action="/colorPrime" method="POST" role="form">
      <legend>colorPrime</legend>
      <div class="form-group">
        <label for="mytext">Input any number</label>
        <input type="text" class="form-control" name="number" id="mytext" placeholder="Input field">
      </div> 
      <button type="submit" class="btn btn-primary">Print</button>
      {{ csrf_field() }}
    </form>
</div>

</body>
</html>