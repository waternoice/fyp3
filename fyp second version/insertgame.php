<?php

require "db.php";
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $description = $_POST['description'];
 
     $sql = "INSERT INTO games (name,description,link)
     VALUES ('$name','$description','$new_name')";
 
     if (mysqli_query($conn, $sql)) {
       header("location:index.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>