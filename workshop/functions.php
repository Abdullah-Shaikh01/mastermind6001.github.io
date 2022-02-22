<html>
<head>
<title></title>
</head>
<body>
<h4>User defined functions</h4>
<?php
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

function addNumbers($a,$b) {
  return ($a + $b);
}

familyName("Hege", "1975");
familyName("Stale", "1978");

echo addNumbers(1.5, 5.2);
?>
</body>
</html>