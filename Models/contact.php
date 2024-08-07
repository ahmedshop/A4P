<?php

include "Config/config.php";

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    
    if(mysqli_query($conn, $sql))
    {
        header('location: ../index.php?msg=success');
    }

}

?>