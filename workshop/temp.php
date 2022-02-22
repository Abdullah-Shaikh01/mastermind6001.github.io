<?php
    include 'db.php';

    $sql = "Select * from department";
    $result = mysqli_query($con, $sql);
    //to convert into php array
    $depts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($con);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Dept Details
        </title>
    </head>
    <body>
        <h1>DEPARTMENT DETAILS</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Department No.</th>
                <th>Manager ID</th>
            </tr>
            <?php foreach($depts as $dept):?>
                <tr>
                    <td><?php echo htmlspecialchars($dept['Dname']) ?></td>
                    <td><?php echo htmlspecialchars($dept['Dno']) ?></td>
                    <td><?php echo htmlspecialchars($dept['Super_id']) ?></td>
                </tr>
            <?php endforeach ?>
        </table>
        <h3>Add Employee:</h3>
        <hr> <hr>
        <form action="add.php" method="POST"> 
            Name: <input type="text" name = "name">
            Salary: <input type="number" name = "salary">
            Depratment No: <input type = "number" name = "Dno">
            <input type="submit" value = "SUBMIT">
        </form>
    </body>
</html>