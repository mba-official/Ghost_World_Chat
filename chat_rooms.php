<?php 
  include 'partials/_db.php';

?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Ghost World - Chat Room</title>
</head>

<body>
    <!-- Insert Main Body Section -->
    <section class="text-white bg-gray-900 h-full body-font relative">
        <div class="container px-3 py-20 mx-auto">
            <div class="flex flex-col text-center w-full mb-6">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-0 text-white">Ghost Room</h1>
            </div>
            <section class="text-gray-400 body-font">
                <div class="container px-2 mx-auto">
                    <div
                        class="msgbox flex items-center lg:w-3/5 mx-auto border-b pb-4 mb-4 border-gray-200 sm:flex-row flex-col">
                        <!-- <div
                            class="sm:w-18 sm:h-18 h-14 w-14 sm:mr-6 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                            <img src="ghost.jpg" class="w-18 rounded-full">
                        </div>
                        <div class="flex-grow sm:text-left text-center mt-2 sm:mt-0">
                            <p class="mt-1 mb-1 text-green-600 inline-flex items-center">Username: IP Address
                            </p>
                            <p class="leading-relaxed text-base">Blue bottle</p>
                            <p class="mt-1 text-green-600 inline-flex items-center">Message Time
                            </p>
                        </div> -->
                    </div>
                    <form method="post" id="add_msg">
                    <div class="flex w-full justify-center items-end">
                        <div class="relative mr-4 lg:w-full xl:w-1/2 mt-10 w-2/4 md:w-full text-left">
                                <input type="text" id="msg" name="msg" placeholder="Type Message Here..."
                                class="w-full bg-blue-900 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-500 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <button
                            class="inline-flex bg-transparent border border-gray-500 text-white bg-indigo-500 py-2 px-6 focus:outline-none hover:bg-green-900 rounded text-lg" type="submit" id="add_msg" name="add_msg">Send</button>
                        </div>
                    </form>
            </section>
              <div class="flex justify-center">
                <a href="ghost_world.php"
                class="inline-flex bg-transparent border border-gray-500 text-white bg-indigo-500 py-2 px-6 mt-10 focus:outline-white hover:bg-green-900 rounded text-lg">Close Room</a>
              </div>
              <div class="flex justify-center">
                <p class="text-lg mt-2 text-yellow-500">Close the room before leave.</p>
              </div>
        </div>
    </section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

var input = document.getElementById("msg");
input.addEventListener("keypress", function(event) {
if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("add_msg").click();
  }
});

    $(document).ready(function(){
        $("#add_msg").click(function(){
            var msg = $("#msg").val();
            $.post("postmsg.php", {text: msg, ip: "<?php echo $_SERVER['REMOTE_ADDR'] ?>"},
                function(data, status){
                document.getElementsByClassName('msgbox')[0].innerHTML = data;});
                $("#msg").val("");
                return false;
        });
    });
    
setInterval(runFunction, 3000);
function runFunction(){
    $.post("msgcont.php", {ip: "<?php echo $_SERVER['REMOTE_ADDR'] ?>"},
    function(data, status){
        document.getElementsByClassName('msgbox')[0].innerHTML = data;});
}
</script>

</body>

</html>