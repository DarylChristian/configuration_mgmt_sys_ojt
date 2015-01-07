<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

  include_once("logic.php");
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
<body>
<?php
$user=$_POST['uname'];
$pw=$_POST['pass'];
$pos=$_POST['pos'];
$em=$_POST['email'];
$fn=$_POST['fname'];
$mn=$_POST['mname'];
$ln=$_POST['lname'];
$added=$_SESSION['ID'];
$date=$_POST['date'];

$query="INSERT INTO users(username,password,position,email,fn,mn,ln,addedby,date_added) VALUES(:username,:password,:position,:email,:fn,:mn,:ln,:addedby,:date_added)";
$res=$dbh->prepare($query);
$res->execute(array(':username'=>$user,
':password'=>$pw,
':position'=>$pos,
':email'=>$em,
':fn'=>$fn,
':mn'=>$mn,
':ln'=>$ln,
':addedby'=>$added,
':date_added'=>$date

));
echo "Success";


?>
</body>
</html>