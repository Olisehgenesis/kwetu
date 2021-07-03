<!DOCTYPE html>
<html lang="en">
<head>
  <title>kwetu</title>
  <link rel = "icon" href ="./images/kwetu.jpeg" type = "image/x-icon">
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
      <a class="navbar-brand" href="#"><img src="./images/kwetu.jpeg" alt="logo" class="logo">

      </a>
    </div>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse">
    
      <ul class="nav navbar-nav ">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
     
        <li><a href="#">Services</a></li>
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
                        <a href="{{ url('/dashboard') }}"><button class="btn btn-default">Dashboard</button></a>
                    @else
                        <a href="{{ route('login') }}"><button class="btn btn-default">login</button></a>
        </li>
        <li>
                        @if (Route::has('register'))
                           <a href="{{ route('register') }}"><button class="btn btn-default">Register</button></a>
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
        
        <p><strong>BOOKINGS AND ORDERS</strong></p>
        <div class="input-group-btn">
          <button class="btn btn-default dropdown-tooggle " data-toggle="dropdown"><span class="textColor">Buses</span> <span class="caret"></span></button>
     
          <ul class="dropdown-menu">
            <li><a href="###">Gaaga</a></li>
            <li><a href="###">Baby</a></li>
            <li><a href="###">Kkt</a></li>
            <li><a href="###">NileStart</a></li>
            <li><a href="###">Yy</a></li>
          </ul>
        </div><br>
        <div class="input-group-btn">
          <button class="btn btn-default dropdown-tooggle" data-toggle="dropdown"><span class="textColor">Taxes</span> <span class="caret"></span></button><
     
          <ul class="dropdown-menu">
            <span>TO:</span>
            <li><a href="###">Arua</a></li>
            <li><a href="###">Koboko</a></li>
            <li><a href="###">Nebbi</a></li>
            <li><a href="###">Kampala</a></li>
            <li><a href="###">Yumbe</a></li>
          </ul>
        </div><br>
        <div class="input-group-btn">
          <button class="btn btn-default dropdown-tooggle " data-toggle="dropdown"><span class="textColor">Hotels</span> <span class="caret"></span></button>
     
          <ul class="dropdown-menu ">
            <li ><a href="###">Tropical</a></li>
            <li ><a href="###">Desert breeze</a></li>
            <li><a href="###">White Castle</a></li>
            <li><a href="###">Slumberland</a></li>
           
          </ul>
        </div><br>
        <div class="input-group-btn">
          <button class="btn btn-default dropdown-tooggle " data-toggle="dropdown"><span class="textColor">Apartments</span>  <span class="caret"></span></button>
     
          <ul class="dropdown-menu">
            <li><a href="###">Tripplex</a></li>
            <li><a href="###">Rock_shadow</a></li>
            <li><a href="###">Rose villa</a></li>
         
          </ul>
        </div><br>
        <div class="input-group-btn">
          <button class="btn btn-default dropdown-tooggle" data-toggle="dropdown"><span class="textColor">Pawagreen_store</span> <span class="caret"></span></button>
     
          <ul class="dropdown-menu">
            <li><a href="###">Solar_stove</a></li>
            <li><a href="###">Solar_bag</a></li>
            <li><a href="###">kwetu</a></li>
            <li><a href="###">Solar_bicycle</a></li>
          </ul>
        </div><br>
        
    
     </div>
    
    <div class="col-sm-8 text-left "  > 
    
      <div class="well text-center">
        <p><strong class="textColor">WELCOME TO KWETU ONLINE BOOKING SYSTEM</strong><marquee behavior="" direction="">You can book buses, taxes, hotels, apartments wherever you are with us</marquee></p>
      </div>
      <div>
    
           
      <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./images/KK-bus.jpg" alt="first slide" class="imageSize">
      </div>

      <div class="item">
        <img src="./images/KK-bus.jpg"  alt="second slide" class="imageSize">
      </div>
    
      <div class="item">
        <img src="./images/KK-bus.jpg"  alt="third slide" class="imageSize">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
          </a>
      </div>
      <div class="well">
        <p>Incoming projexts are, solor items like bags, bicycles and stoves.
        </p>        
      </div> 
     
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <h1 class="textColor">UPCOMING NEWS</h1>
        We are glad to inform you that we also offer security to your ordered goods.
      </div>
      <div class="well">
        <p>Incoming projexts.
        </p>        
      </div>
     
    
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

});
</script>
</body>
</html>
