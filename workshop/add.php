<?php 
    include 'db.php';

    if(isset($_POST('submit'))) {
        
        $sql = "INSERT INTO employee(name, salary, Dno) Values (name, salary, Dno)";
        if(mysqli_query($con, $sql)) 
            echo 'Added Successfully';
        else 
            echo 'Error: '. mysqli_error($con);
        mysqli_close($con);

    }
?>