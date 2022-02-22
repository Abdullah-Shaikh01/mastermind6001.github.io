<html>
<body>

<?php

include 'dbconnect.php';

 // sql to create table
 $sql = "CREATE TABLE Student (
 rollno INTEGER PRIMARY KEY, 
 firstname VARCHAR(255) NOT NULL,
 lastname VARCHAR(255) NOT NULL,
 email VARCHAR(255)
 )";


 if (mysqli_query($conn, $sql)) {
    echo "<br>Table MyGuests created successfully";
 } else{
    echo "Error creating table: " . mysqli_error($conn);
 }


 mysqli_close($conn);
?>

</body>
</html>