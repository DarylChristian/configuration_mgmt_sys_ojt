<html>
<title>Home</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="theme.css" rel="stylesheet">
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<?php

	include_once("logic.php");

 if(isset($_SESSION['username']))
  {
   
   //header("location:index.php");
  }
  elseif(!isset($_SESSION['username']))
  {
    
	header("location:login.php");
  }

?>

<body>
<!-- Fixed navbar -->

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Configuration Management System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
           
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>

            </li>

          </ul>
          <ul class="nav navbar-nav navbar-right" >
               <li><a href="logic.php?logout=1">Logout</a></li>
           </ul>
        
          </div><!--/.nav-collapse -->
      </div>
    </nav>
               

      <div class="container">

      	     <div class="row">
	    	<div class="col-sm-4">
	    		<a href="ci.php" ><center><img src="pic/CONFIGURATION-MAN-ICON.jpg" width="100" height="100" ></a>
            <p>Configuration Item Management</p>
	    	</div>
	    	<div class="col-sm-4">
	    		<a href="event.php" ><center><img src="pic/EVEN-MAN.-ICON.jpg" width="100" height="100"></a>
            <p>Events Management</p>
			  </div>
			<div class="col-sm-4">
	    		<a href="account.php" ><center><img src="pic/ACOOUNT-MAN-ICON.jpg" width="100" height="100"></a>
            <p>Accounts Management</p>
			</div>
    </div>
	</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
</body>
</html>