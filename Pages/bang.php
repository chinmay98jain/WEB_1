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
  <a class="navbar-brand" href="icfc.php"><i class="fas fa-american-sign-language-interpreting"></i>ICFC</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="icfc.php#about">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="icfc.php#events">Events</a>
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

<img src="../images/bang.jpg">

<br><br>
<hr>
<div id="team">
  <div class="container-fluid text-center"><br/><br/>
   <h4 class="display-4">Team Info</h4><br/><br/>
   <ul class="team" style="font-size: 25px;">
     <li>Captain:- Mashrafe Mortaza(ODI),Shakib-al-hasan(T20,Test)</li>
     <li>Head Coach:- Courtney Walsh</li>
     
     <li>Bowling Coach:- Suniel Joshi</li>
     
     <li>Team Manager:- Khaled Mahmud</li>
    
   </ul>
  
    </div>

<br/><br/>



<div id="team">
  <div class="container-fluid text-center"><br/><br/><hr/>
   <h4 class="display-4">Player Info</h4><br/><br/>
   <div class="row">
   <div class="col-md-2 col-12">
        <a class="nav-link btn btn-primary" href="bang.php?id=1" style="width: 195px;">Mohammad Ashraful</a>
        
        
       <?php
       
        if(isset($_GET['id']) && $_GET['id']=='1')
{        $val=$_GET['id'];
         $xml= simplexml_load_file('bang.xml');
        
          echo $xml->records[0]->dob.'<br/>'.$xml->records[0]->test.'<br/>'.$xml->records[0]->runs.'<br/>'.$xml->records[0]->avg.'<br/>'.$xml->records[0]->ms.'<br/>'.$xml->records[0]->hs.'<br/>'.$xml->records[0]->wks.'<br/>'.$xml->records[0]->odi.'<br/>'.$xml->records[0]->oruns.'<br/>'.$xml->records[0]->oavg.'<br/>'.$xml->records[0]->oms.'<br/>'.$xml->records[0]->ohs.'<br/>'.$xml->records[0]->owks.'<br/>';
 }       
      
        ?>
      
    </div>

     <div class="col-md-2 col-12">
        <a class="nav-link btn btn-primary" href="bang.php?id=2" style="width: 180px;">Tamim Iqbal</a>
        
        
       <?php
       
        if(isset($_GET['id']) && $_GET['id']=='2')
{        $val=$_GET['id'];
         $xml= simplexml_load_file('bang.xml');
        
          echo $xml->records[1]->dob.'<br/>'.$xml->records[1]->test.'<br/>'.$xml->records[1]->runs.'<br/>'.$xml->records[1]->avg.'<br/>'.$xml->records[1]->ms.'<br/>'.$xml->records[1]->hs.'<br/>'.$xml->records[1]->wks.'<br/>'.$xml->records[1]->odi.'<br/>'.$xml->records[1]->oruns.'<br/>'.$xml->records[1]->oavg.'<br/>'.$xml->records[1]->oms.'<br/>'.$xml->records[1]->ohs.'<br/>'.$xml->records[1]->owks.'<br/>'.$xml->records[1]->t20.'<br/>'.$xml->records[1]->truns.'<br/>'.$xml->records[1]->tavg.'<br/>'.$xml->records[1]->tms.'<br/>'.$xml->records[1]->ths.'<br/>'.$xml->records[1]->twks.'<br/>';
 }       
      
        ?>
      
    </div>

     <div class="col-md-2 col-12">
        <a class="nav-link btn btn-primary" href="bang.php?id=3" style="width: 180px;">Mushifiqur Rahim</a>
        
        
       <?php
       
        if(isset($_GET['id']) && $_GET['id']=='3')
{        $val=$_GET['id'];
         $xml= simplexml_load_file('bang.xml');
        
          echo $xml->records[2]->dob.'<br/>'.$xml->records[2]->test.'<br/>'.$xml->records[2]->runs.'<br/>'.$xml->records[2]->avg.'<br/>'.$xml->records[2]->ms.'<br/>'.$xml->records[2]->hs.'<br/>'.$xml->records[2]->wks.'<br/>'.$xml->records[2]->odi.'<br/>'.$xml->records[2]->oruns.'<br/>'.$xml->records[2]->oavg.'<br/>'.$xml->records[2]->oms.'<br/>'.$xml->records[2]->ohs.'<br/>'.$xml->records[2]->owks.'<br/>';
 }       
      
        ?>
      
    </div>

     <div class="col-md-2 col-12">
        <a class="nav-link btn btn-primary" href="bang.php?id=4" style="width: 199px;">Shakib-al-Hasan</a>
        
        
       <?php
       
        if(isset($_GET['id']) && $_GET['id']=='4')
{        $val=$_GET['id'];
         $xml= simplexml_load_file('bang.xml');
        
          echo $xml->records[3]->dob.'<br/>'.$xml->records[3]->test.'<br/>'.$xml->records[3]->runs.'<br/>'.$xml->records[3]->avg.'<br/>'.$xml->records[3]->ms.'<br/>'.$xml->records[3]->hs.'<br/>'.$xml->records[3]->wks.'<br/>'.$xml->records[3]->odi.'<br/>'.$xml->records[3]->oruns.'<br/>'.$xml->records[3]->oavg.'<br/>'.$xml->records[3]->oms.'<br/>'.$xml->records[3]->ohs.'<br/>'.$xml->records[3]->owks.'<br/>';
 }       
      
        ?>
      
    </div>


     <div class="col-md-2 col-12">
        <a class="nav-link btn btn-primary" href="bang.php?id=5" style="width: 180px;">Mashrafe Mortaza</a>
        
        
       <?php
       
        if(isset($_GET['id']) && $_GET['id']=='5')
{        $val=$_GET['id'];
         $xml= simplexml_load_file('bang.xml');
        
          echo $xml->records[4]->dob.'<br/>'.$xml->records[4]->test.'<br/>'.$xml->records[4]->runs.'<br/>'.$xml->records[4]->ms.'<br/>'.$xml->records[4]->hs.'<br/>'.$xml->records[4]->wks.'<br/>'.$xml->records[4]->avg.'<br/>'.$xml->records[4]->odi.'<br/>'.$xml->records[4]->oruns.'<br/>'.$xml->records[4]->oms.'<br/>'.$xml->records[4]->ohs.'<br/>'.$xml->records[4]->owks.'<br/>'.$xml->records[4]->oavg.'<br/>';
 }       
      
        ?>
      
    </div>

     <div class="col-md-2 col-12">
        <a class="nav-link btn btn-primary" href="bang.php?id=6" style="width: 180px;">Mustifizur Rahman</a>
        
       <?php
        
       
        if(isset($_GET['id']) && $_GET['id']=='6')
{        $val=$_GET['id'];
         $xml= simplexml_load_file('bang.xml');
        
          echo $xml->records[5]->dob.'<br/>'.$xml->records[5]->test.'<br/>'.$xml->records[5]->runs.'<br/>'.$xml->records[5]->ms.'<br/>'.$xml->records[5]->hs.'<br/>'.$xml->records[5]->wks.'<br/>'.$xml->records[5]->avg.'<br/>'.$xml->records[5]->odi.'<br/>'.$xml->records[5]->oruns.'<br/>'.$xml->records[5]->oms.'<br/>'.$xml->records[5]->ohs.'<br/>'.$xml->records[5]->owks.'<br/>'.$xml->records[5]->oavg.'<br/>'.$xml->records[5]->t20.'<br/>'.$xml->records[5]->truns.'<br/>'.$xml->records[5]->tms.'<br/>'.$xml->records[5]->ths.'<br/>'.$xml->records[5]->twks.'<br/>'.$xml->records[5]->tavg;
 }       
      
        ?>
      
    </div>
    
    

<br/><br/>
<hr/>
<br/><br/>


<div id="team">
  <div class="container-fluid text-center"><br/><br/><hr/>
   <h4 class="display-4">Team Record</h4><br/><br/>
   <div class="row">
   <div class="col-md-4 col-12">
        <a class="nav-link btn btn-primary" href="bang.php?id=7" style="width: 280px;">Test</a>
        
        
       <?php
       
        if(isset($_GET['id']) && $_GET['id']=='7')
{        $val=$_GET['id'];
         $xml= simplexml_load_file('bang.xml');
        
          echo $xml->records[6]->rank.'<br/>'.$xml->records[6]->match.'<br/>'.$xml->records[6]->won.'<br/>'.$xml->records[6]->lost.'<br/>'.$xml->records[6]->tie;
 }       
      
        ?>
      
    </div> 
<div class="col-md-4 col-12">
        <a class="nav-link btn btn-primary" href="bang.php?id=8" style="width: 280px;">ODI</a>
        
        
       <?php
       
        if(isset($_GET['id']) && $_GET['id']=='8')
{        $val=$_GET['id'];
         $xml= simplexml_load_file('bang.xml');
        
          echo $xml->records[7]->rank.'<br/>'.$xml->records[7]->match.'<br/>'.$xml->records[7]->won.'<br/>'.$xml->records[7]->lost.'<br/>'.$xml->records[7]->tie;
 }       
      
        ?>
      
    </div> 

    <div class="col-md-4 col-12">
        <a class="nav-link btn btn-primary" href="bang.php?id=9" style="width: 280px;">T20</a>
        
        
       <?php
       
        if(isset($_GET['id']) && $_GET['id']=='9')
{        $val=$_GET['id'];
         $xml= simplexml_load_file('bang.xml');
        
          echo $xml->records[8]->rank.'<br/>'.$xml->records[8]->match.'<br/>'.$xml->records[8]->won.'<br/>'.$xml->records[8]->lost.'<br/>'.$xml->records[8]->tie;
 }       
      
        ?>
      
    </div> 

<br/><br/>
<hr/>
<br/><br/>

<footer id="footer">
  <div class="container-fluid text-center"><br/><hr>
   <h4 class="display-4">Contact Us</h4><br/>
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