<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $sender = $_POST['sender'];
    
     $sql = "INSERT INTO query (sender)
     VALUES ('$sender')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>