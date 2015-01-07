<html>
<title>Home</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
	<?php
  	 	include_once("logic.php");
		include("dbcon.php");
		
		
		$un = $_POST['uname'];
		$pw = $_POST['pass'];

		$query = "SELECT * FROM users WHERE username = ?";
		$stmt = $dbh->prepare($query);
		$stmt->execute(array($un));
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		$pw_db = $res['password'];
		$posi=$res['position'];
		$idn=$res['ID'];
		if($pw_db == $pw)
		{
			$_SESSION['ID']=$idn;
			$_SESSION['pos']=$posi;
			$_SESSION['username'] = $un;
			header("location:index.php");
		}
		else
		{
			header("location:login.php");
		}

?>
</body>
</html>