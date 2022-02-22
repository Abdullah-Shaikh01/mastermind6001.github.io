<html>
<head>
<title></title>
</head>
<body>
<h1>String Functions</h1>
<?php
$phrase = "Hello world!";
$name = "John";
$surname ="Denver";

echo "My name is ".$name." ".$surname."<br>";
echo strlen($phrase)."<br>";
echo str_word_count($phrase)."<br>";; // outputs 2
echo strrev($phrase)."<br>";; // outputs !dlrow olleH
echo strpos($phrase, "world")."<br>";; // outputs 6
echo str_replace("world", "Dolly", $phrase)."<br>";; //outputs Hello Dolly!
echo strtoupper($phrase);
?>
</body>
</html>