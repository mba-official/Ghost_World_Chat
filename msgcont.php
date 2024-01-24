<?php 
    include 'partials/_db.php';
    
    $ip = $_POST['ip'];

    $sql = "SELECT `msg`, `msg_ip`, `time` FROM `messages`";

    $res = "";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            $res .= '<div class="msgbox flex items-center mx-auto border-b pb-4 mb-4 border-gray-200 sm:flex-row flex-col">';
            $res .= '<div class="sm:w-18 sm:h-18 h-14 w-14 sm:mr-6 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">';
            $res .= '<img src="ghost.jpg" class="w-18 rounded-full" alt="User Image">';
            $res .= '</div>';
            $res .= '<div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">';
            $res .= '<p class="mt-1 mb-1 text-green-600 inline-flex items-center">'.''.$row['msg_ip'].')</p>';
            $res .= '<p class="leading-relaxed text-base">' . $row['msg'] . '</p>';
            $res .= '<p class="mt-1 text-green-600 inline-flex items-center">' . $row['time'] . '</p>';
            $res .= '</div>';
            $res .= '</div>';
        }
    }
    echo '<div class="messages-container" style="width:70rem; height: 38.2rem; overflow-y: scroll;">' . $res . '</div>';
?>