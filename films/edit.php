<?php
    include "db.php";

    if (isset($_GET['id'])){
        $id =$_GET['id'];

        $sql = "SELECT * FROM movies WHERE id = $id";
        $result=$conn->query($sql);

        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $name = $row ['name'];
            $year = $row ['year'];
        }
        else{
            echo "No movie found";
        }
    }
    
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST['name'];
        $year=$_POST['year'];
        $id=$_POST['id'];

        if(!empty($name) && !empty($year)){
            $sql ="UPDATE movies SET name='$name', year='$year' WHERE id='$id'";
            
            if($conn->query($sql)=== TRUE){
                echo "Movie updated sucessfully!";
            }
            else{
                echo "Update Failed";
            }
        }
        else{
            echo "Fill all the fields!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h2>Edit Movies</h2>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>"> 
        Name: <input type="text" name="name" value="<?php echo $name; ?>"> <br><br>
        Year: <input type="text" name="year" value="<?php echo $year; ?>"> <br><br>
        <input type="submit" value="Update Movies">
    </form>
    <a href="index.php">Back</a>
</body>
</html>

