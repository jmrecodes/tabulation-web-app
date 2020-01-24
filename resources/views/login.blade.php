<!DOCTYPE html>
<html lang="en">
<head>

  <title>Pageant Tabulation System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    background: #2c3e50;
  }
  p {font-size: 16px;}
  
  .well{
    border-radius: 30px;
    margin-top: 10%;
    opacity: 0.9;
  }
  .input-group{
    margin-bottom: 15px;
  }
  body {
  /* background: url('{{URL::to('images/bg.jpg')}}') no-repeat center center fixed; */
  background-size: cover;
  height: 100%;
  overflow: hidden;
}
 
  </style>
</head>
<body>




<div class="container">
    
    <div class="col-md-4 col-md-offset-4 well">
      <center>
       {{-- <img src="{{URL::to('images/logo2.png')}}" width="120px"> --}}
       <h1>Pageant Tabulation System</h1>
       <br>
    </center>
      @if(Session::has('error'))
        <div class="alert alert-danger">
          <p>{{Session::get('error')}}</p>
        </div>
      @endif
      <form action="" method="POST">
      
        <div class="input-group">
          <span class="input-group-addon glyphicon glyphicon-envelope" id="basic-addon1"></span>
          <input type="email" name="email" class="form-control"  aria-describedby="basic-addon1" data-toggle="tooltip" title="Enter Email" data-placement="right">
        </div>
        <div class="input-group">
          <span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1"></span>
          <input type="password" name="password" class="form-control"  aria-describedby="basic-addon1" data-toggle="tooltip" title="Enter Password" data-placement="right">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Login</button>
          <!-- <a href="{{ route('register') }}" class="btn btn-default btn-block">Register</a> -->
          @csrf
        </div>
      </form>
    </div>
</div>
</body>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</html>
