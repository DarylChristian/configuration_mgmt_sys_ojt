<html>
<title>Home</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="theme.css" rel="stylesheet">
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
</head>

       <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
 

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
            <li class="active"><a href="index.php">Home</a></li>
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
        <h1>EVENT MANAGEMENT</h1> 
        <br>

      <div class="col-md-5">
           <div class="input-group">
            <input type="text" class="form-control" placeholder="name,item,type,model">
             <span class="input-group-btn">
              <button class="btn btn-primary" type="button">Search</button>
          </span>
       </div><!-- /input-group -->
     </div><!-- /.col-lg-6 -->
     <br>
     <br>
     <br>
   
   <div class="panel panel-default">
        <!-- Default panel contents -->
          <div class="panel-heading">HISTORY</div>

          <!-- Table -->
            <table class="table">
           <thead>
                <tr>
                  <th>Date Reported</th>
                  <th>Time Reported</th>
                  <th>Reported by</th>
                  <th>Problem</th>
                  <th>Solution</th>
                  <th>Date Resolved</th>
                  <th>Time Resolved</th>
                  <th>Resolved by</th>
                </tr>
              </thead>
        </table>
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
</body>
</html>