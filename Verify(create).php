<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Verification</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            background-color: white;
        }

        /* Custom scalloped shape for the banner */
        .scalloped-banner {
            background-color: #ff4fa1;
            mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20" preserveAspectRatio="none"><path d="M0 0h100v10C95 15 90 15 85 10C80 5 75 5 70 10C65 15 60 15 55 10C50 5 45 5 40 10C35 15 30 15 25 10C20 5 15 5 10 10C5 15 0 15 0 10Z" fill="black"/></svg>');
            mask-size: 100% 100%;
            -webkit-mask-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20" preserveAspectRatio="none"><path d="M0 0h100v10C95 15 90 15 85 10C80 5 75 5 70 10C65 15 60 15 55 10C50 5 45 5 40 10C35 15 30 15 25 10C20 5 15 5 10 10C5 15 0 15 0 10Z" fill="black"/></svg>');
            -webkit-mask-size: 100% 100%;
        }
    </style>
</head>

<body class="text-[#4a4a4a]">

    <main class="flex flex-col items-center py-20 px-5 min-h-[600px]">
        <img src="Logo.png" alt="ASweetenz Bunny" class="w-36 mb-6">

        <section class="bg-[#f9f9f9] p-12 rounded-[50px] w-full max-w-[550px] text-center shadow-sm">
            <h1 class="text-[#ff4fa1] text-5xl mb-10 font-bold">Enter Verification Code</h1>

            <div class="text-left mb-6">
                <label class="block text-lg font-bold mb-2">Enter Code <span class="text-red-500">*</span></label>
                <input type="text" placeholder="Enter Code"
                    class="w-full py-4 px-8 border-[2.5px] border-black rounded-full text-xl outline-none placeholder:text-gray-300">
            </div>

            <button class="bg-[#ff4fa1] text-white py-4 w-full rounded-full text-3xl font-bold cursor-pointer mb-6 hover:bg-[#e0458e] transition-colors">
                Create Account
            </button>

            <a href="#" class="text-black font-bold text-lg underline underline-offset-4">
                Code was sent thru your email
            </a>
        </section>
    </main>

    <footer class="bg-[#ffc3dc] py-16 px-[5%] flex justify-between flex-wrap mt-20 text-[#ff4fa1]">
        <div class="flex-1 px-5 min-w-[280px] flex flex-col justify-between">
            <img src="Brand and logo.png" alt="ASweetenz" class="max-w-[280px]">
            <div class="mt-10 font-bold text-xs">© 2026 ASweetenz. All rights reserved.</div>
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