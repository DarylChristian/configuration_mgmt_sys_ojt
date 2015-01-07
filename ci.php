<html>
<title>Home</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="theme.css" rel="stylesheet">
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<script type="text/javascript">

function enable_text(status)
{
status=!status; 
document.f1.other_text.disabled = status;
}

</script>
<?php

  include_once("logic.php");
  include("query.php");
  include("dbcon.php");

 if(isset($_SESSION['username']))
  {
   
   //header("location:index.php");
  }
  elseif(!isset($_SESSION['username']))
  {
    
  header("location:login.php");
  }


?>

<body onload=enable_text(false);>
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
            <li class="active"><a href="#">Home</a></li>
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
            <h2>Add Configuration Item</h2>
              <form method="post" action="addType.php" role="form" class="form-group" >
                

                    <form class="form-horizontal">
                       <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">@</span>
                              <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
                          </div>
                        </div>
                     












                    <input type="submit" class="form-control btn-sm-default" name="submit">








               </form>
   
</div>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
</body>
</html>