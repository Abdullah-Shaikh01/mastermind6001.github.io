<html>
<head>
<title></title>
</head>
<body>
<h4>Conditional Statement: if-elseif-else</h4>

<?php
$percentage = 68;

if($percentage >=70 ){
	echo "Distinction!";
}elseif($percentage >=60){
	echo "First Class";
}elseif($percentage >=40){
	echo "Second Class";
}else{
	echo "Pass Class";
}
?>
</body>
</html>