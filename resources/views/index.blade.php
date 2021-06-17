<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kwetu Booking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./bootstrap3/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/customCss.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./bootstrap3/js/bootstrap.min.js"></script>
  <style>
   
    
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">logo
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
     
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="what do you want to book?">
          </div>
          <button class="btn btn-default">search</button>
        
        </form>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li>
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"> <span class="glyphicon glyphicon-log-in text-primary">Login</a>
        </li>
        <li>
                        @if (Route::has('register'))
                           <a href="{{ route('register') }}"><span class="text-primary"> Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
  
        <div class="input-group-btn">
          <button class="btn btn-default dropdown-tooggle " data-toggle="dropdown"><span class="text-danger">Busses</span> <span class="caret"></span></button>
     
          <ul class="dropdown-menu">
            <li><a href="###">Gaaga</a></li>
            <li><a href="###">Baby</a></li>
            <li><a href="###">Kkt</a></li>
            <li><a href="###">NileStart</a></li>
            <li><a href="###">Yy</a></li>
          </ul>
        </div><br>
        <div class="input-group-btn">
          <button class="btn btn-default dropdown-tooggle" data-toggle="dropdown"><span class="text-danger">Taxes</span> <span class="caret"></span></button><
     
          <ul class="dropdown-menu">
            <li><a href="###">mg</a></li>
            <li><a href="###">mg</a></li>
            <li><a href="###">serve</a></li>
            <li><a href="###">serve</a></li>
            <li><a href="###">serve</a></li>
          </ul>
        </div><br>
        <div class="input-group-btn">
          <button class="btn btn-default dropdown-tooggle " data-toggle="dropdown"><span class="text-danger">Hotels</span> <span class="caret"></span></button>
     
          <ul class="dropdown-menu ">
            <li ><a href="###">Tropical</a></li>
            <li ><a href="###">Desert breeze</a></li>
            <li><a href="###">tropical</a></li>
            <li><a href="###">desert breeze</a></li>
           
          </ul>
        </div><br>
        <div class="input-group-btn">
          <button class="btn btn-default dropdown-tooggle " data-toggle="dropdown"><span class="text-danger">Apartments</span>  <span class="caret"></span></button>
     
          <ul class="dropdown-menu">
            <li><a href="###">GAAGA</a></li>
            <li><a href="###">BABY</a></li>
            <li><a href="###">KKT</a></li>
            <li><a href="###">NILEstar</a></li>
            <li><a href="###">YY</a></li>
          </ul>
        </div><br>
        <div class="input-group-btn">
          <button class="btn btn-default dropdown-tooggle" data-toggle="dropdown"><span class="text-danger">P_green</span> <span class="caret"></span></button>
     
          <ul class="dropdown-menu">
            <li><a href="###">GAAGA</a></li>
            <li><a href="###">BABY</a></li>
            <li><a href="###">KKT</a></li>
            <li><a href="###">NILEstar</a></li>
            <li><a href="###">YY</a></li>
          </ul>
        </div><br>
        

    
     </div>
    
    <div class="col-sm-8 text-left "  > 
    <div class="well well-sm text-center">
        <p id="clickme">Do you want more updates on online booking items? <br>If yes, click on the button below and you will receive an email soon.</p>
        <button class="btn btn-primary">more Updates</button>
      </div>
      <div class="well text-center">
        <p>KWETU PROJECTS</p>
      </div>
      <div class="panel panel-body">
      <a href="" class="thumbnail">
           
           <img src="/images/KK-bus.jpg" alt="">
          </a>
      </div>
      <div class="well text-center">
        <p>ORDERS</p>
      </div>
     
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>UPCOMING NEWS</p>
      </div>
      <div class="well">
        <p>KWETU PROJECTS</p>
      </div>
      <div class="well">
        <p>SERVICES</p>
      </div>
      <div class="well">
        <p>ORDERS</p>
      </div>
      <div class="well">
        <p>SERVICES</p>
      </div>
      <div class="well">
        <p id="clickme" >ORDERS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="./bootstrap3/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("p").click(function(){
    $("#clickme").hide();
  });
});
</script>
</body>
</html>
