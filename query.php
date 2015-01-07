<?php

function type()
{
	include("dbcon.php");
	$q="SELECT * FROM type ";
	foreach($dbh->query($q) as $row)
	{
		$id = $row['id'];
		$typ = $row['type_name'];
		echo "<option value='$id'>
					$typ
			</option>";
	}

}






?>