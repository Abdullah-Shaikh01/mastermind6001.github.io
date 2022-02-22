<?php
include 'dbconnect.php';

$sql = "INSERT INTO student (rollno,fname, lname, email)
        VALUES ( 102, 'John', 'Doe', 'jane@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "<br>New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>