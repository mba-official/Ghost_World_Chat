<?php 

    $conn = mysqli_connect("localhost", "root", "", "ghost_world");

    if(!$conn){
        die("Error due to ". mysqli_connect_error());
    }

?>