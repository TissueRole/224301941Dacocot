<?php
    include 'db.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST['name'];
        $year = $_POST['year'];
    }

    if(!empty($name)&& !empty ($year)){
        $sql= "INSERT INTO movies (name, year) VALUES ('$name','$year')";

        if($conn->query($sql)=== TRUE){
            echo "New movie added sucessfully!";
        }
        else{
            echo "Failed to add new movie";
        }
    }
    else{
        echo "Please fill all the fields";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Movie</title>
</head>
<body>
    <h2>Add a new movie</h2>
    <form action="add.php" method="post">
        Name: <input type="text" name="name"> <br><br>
        Year: <input type="number" name="year"> <br><br>
        <input type="submit" value ="Add Movie">
    </form>
    <a href="index.php">Back</a>
</body>
</html>