<html>
<title>Home</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="theme.css" rel="stylesheet">
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!--datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
    $(function() {
      $( "#datepicker" ).datepicker({dateFormat:'yy-mm-dd'});
    });
    </script>
      <!-- end of datepicker -->
 
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

      
            <form class="form-horizontal" action="insertUser.php" method="post">
              <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">First Name</label>
                  <div class="col-md-8">
                    <input type="firstname" name="fname" class="form-control" id="firstname" placeholder="First Name" required>
                   </div>
              </div>
  
  
              <div class="form-group">
                <label for="middlename" class="col-sm-2 control-label">Middle Name</label>
                  <div class="col-md-8">
                    <input type="middlename" name="mname" class="form-control" id="middlename" placeholder="Middle Name" required>
                  </div>
              </div>
  
  
              <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                  <div class="col-md-8">
                    <input type="lastname" name="lname" class="form-control" id="lastname" placeholder="Last Name" required>
                  </div>
              </div>
  
  
              <div class="form-group">
                <label for="position" class="col-sm-2 control-label">Position</label>
                  <div class="col-md-8">
                    <select class="form-control" name="pos" required>
                      <option>Faculty</option>
                      <option>Prof</option>
                      <option>asdsda</option>
                      <option>asdsda</option>
                      <option>asdasdsa</option>
                    </select>
                  </div>
              </div>
  
  
              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email Address</label>
                  <div class="col-md-8">
                    <input type="email" name="email" class="form-control" id="email" placeholder="email@example.com" required>
                  </div>
              </div>
  
  
              <div class="form-group">
                <label for="username" class="col-sm-2 control-label">User Name</label>
                  <div class="col-md-8">
                    <input type="username" name="uname" class="form-control" id="username" placeholder="Username" required>
                  </div>
              </div>
  
  
  
              <div class="form-group">
               <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-md-8">
                  <input type="password" name="pass" class="form-control" id="password" placeholder="Password" required>
                </div>
              </div>
  
 
  
              <div class="form-group">
                <label for="addedby" class="col-sm-2 control-label">Date Added</label>
                <div class="row">
                  <div class="col-md-4">
                    <div class='input-group date' >
                      <input type='text' id="datepicker" name="date" required/>
                    </div>
                  </div>
                </div>
              </div>

            

 
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit" class="btn btn-primary" name="reg">Register</button>
                </div>
              </div>
        </form>
      
   
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

    
</body>
</html>