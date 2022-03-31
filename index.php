<?php
include_once('config.php');
?>

<html>
    <head>
		<tittle> </tittle>
		<meta charset="utf-8">
	     <style>
                body
             {
                background-image: url('1.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
             }
         </style>
                 <link rel ="stylesheet" type="text/css" href="css/style.css">
                 <meta charset="utf-8">
                 <meta name="viewport" content="width=device-width, initial-scale=1">
                 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
        
        
        <style> 
               input[type=text] {
  text-align:center;
  position:absolute;
  top:55%;
  left:50%;
  transform:translate(-50%,-50%);
  float:center;
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 5px;
  font-size: 15px;
  background-color: white;
  background-image: url('');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
               input[type=text]:focus {
  width: 30%;
}
        </style>
        
     
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">JBQUERY</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Home</a></li>-->
        <li class="dropdown">
          <!--<a class="dropdown-toggle" data-toggle="dropdown" href="#"> HOME<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>-->
        </li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
        <li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>
    
 
    
        <center>
		    <div class="tittle">
		    <h1>JBQUERY SEARCH</h1>
			</div>
			<!--<div class="container">
			<div class="col-md-20">
			<form action="jbsearch.php" action="GET">
			<div class="row">
			<div class="col-md-9">
			<input type ="text" name="keys" class="form-conrol" placeholder="search for keyword..." size="60">
			</div>
			<div class="col-md-3">
			<input type = "submit" name="submit" name="submit"  value="search" cursor="pointer">
			</div>
			</div>
			</form>
			</div>
			</div>-->
		</center>
		
    
    
<center><form action="jbsearch.php" action="GET">
  <input type="text" name="keys"  class="form-conrol"  placeholder="Search..">
</form>
    </center>
   
</body>
</html>


	

		    

		




