<html>
<body> 

<?php
if(isset($_POST['SubmitButton'])){ //check if form was submitted
	echo "Welcome ". $_POST["name"]."<br>";
	echo "Your email address is: ". $_POST["email"]; 
}
else{    
?>  
<form action="" method="post">
  Name:<input type="text" name="name"/><br><br>
  Email:<input type="text" name="email"/><br><br>
  <input type="submit" name="SubmitButton"/>
</form>   
</body>
</html>

<?php
}
?>
