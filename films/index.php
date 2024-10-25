<?php
    include "db.php";

    $sql="Select * from movies";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
</head>
<body>
    <h2>Films</h2>
    <table border='1'>
        <tr>
            <th>Name</th>
            <th>Year</th>
            <th>Action</th>
        </tr>
        <?php
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td><a href ='delete.php?id=".$row['id']."'>Delete</a></td>";
                echo "<td><a href ='edit.php?id=".$row['id']."'>Edit</a></td>";
                echo "</tr>";
            }
        } 
        else{
            echo "<tr><td colspan ='3'> No movies found</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="add.php">Add New Movie</a>
</body> 
</html>