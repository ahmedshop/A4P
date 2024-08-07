<?php

$conn = new mysqli("localhost", "root", "", "a4p");

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

?>