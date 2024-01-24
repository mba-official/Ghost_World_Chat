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
    <title>Ghost World</title>
</head>

<body>
    <!-- Insert Navbar -->
    <header class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-10 md:mb-14 cursor-pointer"
                href="ghost_world.php">
                <i class="fa fa-user-secret" style="font-size: 2rem;"><span class="ml-3 text-xl">Ghost World</span></i>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <p>Start chat without creating an account.</p>
            </nav>
        </div>
    </header>
    <!-- Insert Main Body Section -->
    <section class="text-gray-400 bg-gray-900 body-font md:mx-auto">
        <div class="container mx-auto flex flex-col px-5 py-20 justify-center items-center">
            <img class="lg:w-2/2 md:w-1/4 w-2/2 mb-10 object-cover object-center rounded" alt="hero" src="ghost.jpg">
            <div class="w-full md:w-2/3 flex flex-col items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-10 font-medium text-white">Welcome to the GHOST WORLD</h1>
                <p class="mb-10 leading-relaxed">Enter a realm of anonymous conversations. Claim your spectral space,
                    share the link, and chat privately with friends, leaving no trace behind.</p>
                <div class="flex w-full justify-center items-end">
                    <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                        <form method="post" action="claim.php" id="room">
                            <label for="room" class="leading-7 text-sm text-gray-400">Room Name: (Enter room name and click on claim.)</label>
                            <input type="text" id="room" name="room"
                                class="w-full bg-gray-800 rounded border bg-opacity-40 border-gray-700 focus:ring-2 focus:ring-indigo-900 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button
                        class="inline-flex text-white cursor-pointer bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Claim</button>
                    </form>
                </div>
                <!-- <p class="text-sm mt-2 text-gray-500 mb-20 w-full">Enter room name and click on claim.</p> -->
            </div>
        </div>
    </section>


</body>

</html>