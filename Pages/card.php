<!DOCTYPE html>
<html lang="en">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="../lightbox/src/css/lightbox.css" rel="stylesheet">
    <script type="text/javascript" src="../lightbox/dist/js/lightbox-plus-jquery.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


<?php
session_start();
if(!isset($_SESSION['uname']))
{
  header("Location:login.php");
}
?>

<style type="text/css">
  body{
    padding-top: 20px;
  }
  img{
    width: 100%;
    max-height: 400px;
  }
  section{
    padding-bottom: 40px;
  }
  footer{
    margin-top: 15px;
   /* background-color: darkgray;
    border-radius: 20px;
    border:1px solid black;*/
  }
  .circle{

  }
</style>

  </head>
  <body data-spy="scroll" data-target="#mynav">

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!--Navbar-->

 <nav id="mynav" class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><i class="fas fa-american-sign-language-interpreting"></i>ICFC</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#events">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">Contact</a>
      </li>
      
    </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Cric-Stats</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="india.php">India</a>
            <a class="dropdown-item" href="aus.php">Australia</a>
            <a class="dropdown-item" href="eng.php">England</a>
            <a class="dropdown-item" href="pak.php">Pakistan</a>
            <a class="dropdown-item" href="sr.php">Sri Lanka</a>
            <a class="dropdown-item" href="sa.php">South Africa </a>
            <a class="dropdown-item" href="wi.php">West Indies</a>
            <a class="dropdown-item" href="nz.php">New Zealand</a>
            <a class="dropdown-item" href="bang.php">Bangladesh</a>
          </div>
        </div>
      </li>
      &nbsp;&nbsp;
       <li class="nav-item">
        <form action="login.php" method="POST">
        <button class="nav-link btn btn-primary" name="logout" id="logout" value="logout" style="color: white;">Logout</button>
      </form>
      </li>
    </ul>
  </div>
</nav>


<div class="container row">
  <div class="col-7 offset-3">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="../images/team_india.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="../images/ipl.jpg" alt="Third slide">
      <div class="carousel-caption">
        <h3></h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="../images/award.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div></div>

<br/><br/><br/>


<div id="accordian" role="tablist">
    <div class="row">
<div class="col-md-4 col-12">
   <div class="card">
    <a href="#download" class="btn btn-primary" data-toggle="collapse" data-parent="#accordian">Select Your Membership</a>
  <div class="collapse" id="download">
    <div class="card card-block">
    <h3>Membership Price List</h3>

   <h5>Choose the best</h5>
    <a href="../images/price.jpg" data-lightbox="cards" data-title="">Membership Price List<img src="../images/price.jpg" class="img-fluid img-thumbnail"></a>
    <br>
  </div>
</div>
   </div></div> 

<div class="col-md-4 col-12">
   <div class="card">
    <a href="#contact"  class="btn btn-info" data-toggle="collapse" data-parent="#accordian">Membership Cards</a>
  <div class="collapse" id="contact">
<div class="card card-block">
    <h3>These can be yours</h3>
    <br>
   <h5>ICFC PURPLE Card</h5>
    <a href="../images/pcard.jpg" data-lightbox="cards" data-title="">Purple card<img src="../images/pcard.jpg" class="img-fluid img-thumbnail"></a>
    <br>
     <h5>ICFC RED Card</h5>
    <a href="../images/rcard.jpg" data-lightbox="cards" data-title="">Red card<img src="../images/rcard.jpg" class="img-fluid img-thumbnail"></a>
    <br>
  </div>
</div>
   </div> </div>

<div class="col-md-4 col-12">
<div class="card">
    <a href="#support" class="btn btn-primary" data-toggle="collapse" data-parent="#accordian">How to Apply ??</a>
  <div class="collapse" id="support">
    <div class="card card-block">
      <h2>Apply Now</h2>
      <br>
      <p class="lead">Visit our nearest branch and get the privelege today only.</p>
      <p class="lead">For more details <a href="#footer">contact us</a></p>
      <h4>OR</h4> 
      <p class="lead">Get your card at your home</p>
      <p class="lead">Dial 1800-838-383 (Toll Free)</p>
  

  </div>
</div>
</div>
</div>
<br><br>
<br><br>
<hr>
<footer id="footer">
  <div class="container-fluid text-center">
   <h3 class="display-3">Contact Us</h3><br/>
   <div class="row">
   <div class="col-md-3 col-12">
 
  <p class="lead">Tel:- 011-25467894</p>
  <p class="lead">Fax:- +91-011-1234567</p>
  <p class="lead">E-mail:- icfc_delhi@crc.org</p>
  <p class="lead">
    Block 17/A Mahatma Gandhi Road,New Delhi:110035
  </p>
</div>

 <div class="col-md-3 col-12">
 
  <p class="lead">Tel:- 022-25467894</p>
  <p class="lead">Fax:- +91-022-1234567</p>
  <p class="lead">E-mail:- icfc_mum@crc.org</p>
  <p class="lead">
    18F block Andheri West,Mumbai,Maharashtra:400058
  </p>
</div>

 <div class="col-md-3 col-12">
 
  <p class="lead">Tel:- 033-25467894</p>
  <p class="lead">Fax:- +91-033-1234567</p>
  <p class="lead">E-mail:- icfc_wb@crc.org</p>
  <p class="lead">
    22C block Mandeville Garden,Kolkata,West Bengal:700019
  </p>
</div>

 <div class="col-md-3 col-12">
 
  <p class="lead">Tel:- 080-25467894</p>
  <p class="lead">Fax:- +91-080-1234567</p>
  <p class="lead">E-mail:- icfc_kar@crc.org</p>
  <p class="lead">
    16/1 block Rajaji Road,Bangalore,Karnataka:560058
  </p>
</div>
</div>
<hr>

  <h3 class="display-4">Follow us:-</h3>
   &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.twitter.com"><i class="fab fa-twitter fa-3x"></i></a>
  &nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com"><i class="fab fa-facebook-f fa-3x"></i></a>
  &nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com"><i class="fab fa-instagram fa-3x"></i></a>
</div>
<br><br>
<div class="jumbotron text-center" style="background-color: #909497;padding: 6px;">
  <h4>Copyright &copy ICFC</h4>  
</div>
</div>
</footer>
</div>
<script src="../lightbox/js/lightbox.js"></script>
  </body>
</html>




