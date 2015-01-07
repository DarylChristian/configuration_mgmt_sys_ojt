
<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'nikkorowellnympha';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=cimngt", $username, $password);
    /*** echo a message saying we have connected ***/
    
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>