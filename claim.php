<?php 
    $room = $_POST['room'];

    include 'partials/_db.php';

    $sql = "SELECT * FROM `rooms` WHERE room_name = '$room'";

    $result = mysqli_query($conn, $sql);

    if($result){
        if(mysqli_num_rows($result) == 0){
        echo "<script language='javascript'>";
        echo "alert('This room does not exist claim room first.')";
        echo "window.location=http://localhost/ghost_world.php";
        echo "</script>";
        }else{
            $sql = "INSERT INTO `rooms` (`room_name`, `room_time`) VALUES ('$room', CURRENT_TIMESTAMP)";
            // $result = mysqli_query($conn, $sql);
            if(mysqli_query($conn, $sql)){
                header('location: chat_rooms.php');
            // echo "<script language='javascript'>";
            // echo "alert('This room does not exist claim room first.')";
            // echo "window.location=http://localhost/ghost_world/chat_rooms.php?roomname=".$room."";
            // echo "</script>";
            }
        }
    }
?>