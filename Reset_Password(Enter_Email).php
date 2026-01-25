<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-[#4a4a4a]">

    <nav class="absolute left-1/2 -translate-x-1/2 flex gap-x-12">
        <a href="#" class="text-white text-2xl font-bold no-underline hover:opacity-80 transition-opacity">Home</a>
        <a href="#" class="text-white text-2xl font-bold no-underline hover:opacity-80 transition-opacity">Shop All</a>
        <a href="#" class="text-white text-2xl font-bold no-underline hover:opacity-80 transition-opacity">Collections</a>
        <a href="#" class="text-white text-2xl font-bold no-underline hover:opacity-80 transition-opacity">Commission</a>
        <a href="#" class="text-white text-2xl font-bold no-underline hover:opacity-80 transition-opacity">About</a>
    </nav>

    <div class="flex items-center gap-x-8 ml-auto z-10 mt-[-20px]">
        <img src="user.png" alt="User" class="h-[42px] brightness-0 invert cursor-pointer">
        <img src="search.png" alt="Search" class="h-[32px] brightness-0 invert cursor-pointer">
        <img src="cart2.png" alt="Cart" class="h-[42px] brightness-0 invert cursor-pointer">
    </div>
    </header>

    <main class="flex flex-col items-center py-10 px-5">
        <img src="Logo.png" alt="Bunny Mascot" class="w-36 mb-5">

        <section class="bg-[#f9f9f9] p-10 rounded-[40px] w-full max-w-[550px] text-center shadow-sm">
            <h1 class="text-[#ff4fa1] text-5xl font-bold mb-10">Enter Verification Code</h1>

            <div class="text-left mb-6">
                <label class="block text-lg font-bold mb-2 ml-2">Enter Email<span class="text-[#ff4fa1]">*</span></label>
                <input type="email" placeholder="Enter Email"
                    class="w-full py-4 px-8 border-[2.5px] border-black rounded-full text-lg outline-none placeholder:text-gray-300 font-semibold">
            </div>

            <button class="bg-[#ff4fa1] text-white border-none py-4 w-full rounded-full text-3xl font-bold cursor-pointer mb-8 hover:opacity-90 transition-opacity">
                Send Code
            </button>

            <div>
                <a href="#" class="text-black font-bold text-lg underline underline-offset-4">Return to Login Page</a>
            </div>
        </section>
    </main>

    <footer class="bg-[#ffc3dc] py-16 px-[5%] flex justify-between flex-wrap mt-20 text-[#ff4fa1]">
        <div class="flex-1 px-5 min-w-[280px] flex flex-col justify-between">
            <img src="Brand and logo.png" alt="ASweetenz" class="max-w-[280px]">
            <div class="mt-10 font-bold text-sm">© 2026 ASweetenz. All rights reserved.</div>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Information</h4>
            <ul class="list-none p-0 space-y-2">
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Home</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Shop All</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Collections</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">About</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Support</h4>
            <ul class="list-none p-0 space-y-2">
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Refund Policy</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">FAQs</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Privacy Policy</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Terms of Use</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Customer Service</h4>
            <ul class="list-none p-0 space-y-2">
                <li><a href="#" class="text-lg font-semibold underline decoration-2 leading-tight">Return & Exchange Policy</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Shipping Policy</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Privacy Policy</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Order Tracking</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[250px]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Contact us</h4>
            <div class="space-y-4">
                <div class="flex items-center gap-4 text-lg font-semibold">
                    <i class="fa-brands fa-instagram text-2xl text-black"></i>
                    <span>@angelicasweetenz</span>
                </div>
                <div class="flex items-center gap-4 text-lg font-semibold">
                    <i class="fa-brands fa-discord text-xl text-black"></i>
                    <span>asweetenz</span>
                </div>
                <div class="flex items-center gap-4 text-lg font-semibold">
                    <i class="fa-solid fa-envelope text-xl text-black"></i>
                    <span class="text-base">angelica.sweetenz@gmail.com</span>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>