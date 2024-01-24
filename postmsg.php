<?php 
    include 'partials/_db.php';

    $msg = $_POST['text'];
    $ip = $_POST['ip'];

    $sql = "INSERT INTO `messages`(`msg`, `msg_ip`, `time`) VALUES ('$msg', '$ip', CURRENT_TIMESTAMP)";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>