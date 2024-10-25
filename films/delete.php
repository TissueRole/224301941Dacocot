<?php
    include "db.php";

    if (isset($_GET['id'])){
        $id =$_GET['id'];

        $sql = "DELETE FROM movies WHERE id = $id";
        if($conn->query($sql)=== TRUE){
            echo "Movie deleted sucessfully!";
        }
        else{
            echo "Deletion Failed";
        }
    }

    header("Location: index.php");
?>