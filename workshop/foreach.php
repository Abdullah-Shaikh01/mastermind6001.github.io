<html>
<head>
<title></title>
</head>
<body>
<h4>Loops-Example: foreach</h4>
<?php

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $value) {
  echo "$value<br>";
}
?>
</body>
</html>