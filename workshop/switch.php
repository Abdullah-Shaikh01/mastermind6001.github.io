<html>
<head>
<title></title>
</head>
<body>
<h4>Conditional Statement: switch</h4>

<?php
$flower = "rose";

switch($flower){
	
	case "rose":
		echo $flower." costs Rs 10/-";
		break;
	case "daisy":
		echo $flower." costs Rs 8/-";
		break;
	case "lily":
		echo $flower." costs Rs 20/-";
		break;
	default:
		echo "There is no such flower in our shop";
}
?>
</body>
</html>