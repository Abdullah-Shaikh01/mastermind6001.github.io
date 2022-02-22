<?php
    $con = mysqli_connect('localhost', 'temp');
    if(!$con)
        echo "Connection error:". mysqli_connect_error();
    // else 
    //     echo "Connection successful";
    mysqli_select_db($con, 'temp');
?>