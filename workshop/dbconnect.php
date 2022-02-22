<?php
 $dbhost = "localhost";
 $dbuser = "abd";
 $dbpass = "abd";
 $db = "workshop";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "Connected Successfully";
?>