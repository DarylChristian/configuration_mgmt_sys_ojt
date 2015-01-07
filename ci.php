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
                
              

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">CI Name:</span>
                              <input type="text" class="form-control" placeholder="Type CI Name" aria-describedby="sizing-addon2" required>
                          </div>
                        </div>
                      </div>
                    </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">Type</span>
                              <select class="form-control" required>
                                <?php type(); ?>
                              </select>
                        </div>
                      </div>
                                <div class="col-xs-1">
                                  <div class="checkbox">
                                    <label>
                                       <input type="checkbox"> 
                                    </label>
                                  </div>
                                </div>

                                <div class="col-md-5">
                                  <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Add type">
                                      <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Add</button>
                                      </span>
                                  </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->

                    </div>
                  </div>
                              

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">Model:</span>
                              <input type="text" class="form-control" placeholder="Type Model" aria-describedby="sizing-addon2" required>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">Item/Part</span>
                              <input type="text" class="form-control" placeholder="Type Item/Part" aria-describedby="sizing-addon2" required>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">Serial Number:</span>
                              <input type="text" class="form-control" placeholder="Serial Number" aria-describedby="sizing-addon2" required>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">Specs:</span>
                              <input type="text" class="form-control" placeholder="Type Specs" aria-describedby="sizing-addon2" required>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">Warranty</span>
                              <input type="text" class="form-control" placeholder="Date" aria-describedby="sizing-addon2" required>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon">Vendor</span>
                              <select class="form-control" required>
                                <?php type(); ?>
                              </select>
                           </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">Acq Date</span>
                              <input type="text" class="form-control" placeholder="Acquisition Date" aria-describedby="sizing-addon2" required>
                          </div>
                        </div>
                      </div>
                    </div>


                   


                     <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon">Location</span>
                              <select class="form-control" required>
                                <?php type(); ?>
                              </select>
                          </div>
                        </div>
                      </div>
                    </div>



                     <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon">Employee</span>
                              <select class="form-control" required>
                                <?php type(); ?>
                              </select>
                          </div>
                        </div>
                      </div>
                    </div>


                     <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon">Employee</span>
                              <select class="form-control" required>
                                <?php type(); ?>
                              </select>
                           </div>
                        </div>
                      </div>
                    </div>

<input class="btn btn-primary" type="submit" value="Submit">



               </form>
   
</div>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
</body>
</html>