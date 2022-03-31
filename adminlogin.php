
<html>
    <head> 
        <tittle></tittle>
	<meta charset="utf-8">
    <style>
        body {
                background-image: url('1.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
               
            }
    </style>
	<!--<link rel ="stylesheet" type="text/css" href="css/admin.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <li class="active"><a href="index.php">HOME</a></li>
        </ul>
    </div>
  </div>
</nav> 
  <div class="container">
  <h1></h1>
    <h2 class="text-center"> HEY..! ADMIN</h2>
    <p class="text-center"></p>
  <form action="adminloginconfig.php" method="POST" autocomplete="" >
    <div class="form-group">
      <label for="email">EMAIL ID</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="user">
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <!--<div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>-->
    <button type="submit" class="btn btn-primary">LOGIN</button>
  </form>
</div>      
</body>
</html>