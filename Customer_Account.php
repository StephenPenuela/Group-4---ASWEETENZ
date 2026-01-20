<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - ASweetenz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            background-color: #ffffff;
            color: #000000;
        }

        .main-bg-pattern {
            background-image: radial-gradient(#e5e5e5 1.5px, transparent 1.5px);
            background-size: 24px 24px;
        }

        .pink-text {
            color: #ff4fa1;
        }

        .pink-bg {
            background-color: #ff4fa1;
        }

        .light-pink-bg {
            background-color: #ffd1e8;
        }

        /* Scalloped Header effect for the top pink bar */
        .header-scalloped {
            background-color: #ff4fa1;
            position: relative;
        }

        .header-scalloped::after {
            content: "";
            position: absolute;
            bottom: -20px;
            left: 0;
            width: 100%;
            height: 40px;
            background-image: radial-gradient(circle at 20px 0px, #ff4fa1 20px, transparent 21px);
            background-size: 40px 40px;
        }

        /* Product Card Styling */
        .product-card {
            background: white;
            border-radius: 20px;
            padding: 20px;
            border: 1px solid #f0f0f0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.02);
        }

        .btn-add-cart {
            background-color: #ff8dc7;
            color: white;
            font-weight: 700;
            padding: 10px;
            border-radius: 9999px;
            width: 100%;
            transition: opacity 0.2s;
        }

        .btn-add-cart:hover {
            opacity: 0.9;
        }

        .btn-view-more {
            background-color: #ff4fa1;
            color: white;
            font-weight: 700;
            padding: 12px 40px;
            border-radius: 9999px;
            font-size: 1.25rem;
        }
    </style>
</head>

<body class="main-bg-pattern">

    <div class="w-full h-[50px] bg-[#ffcae1]"></div>

    <header class="relative w-full h-[180px] bg-[url('banner.png')] bg-[length:100%_100%] bg-no-repeat flex items-center px-[5%] box-border">
        <div class="z-10 mt-[-20px]">
            <img src="Logo_Banner.png" alt="Logo" class="h-20">
        </div>

        <nav class="absolute left-1/2 -translate-x-1/2 hidden md:flex gap-x-12">
            <a href="#" class="text-white text-2xl font-bold no-underline">Home</a>
            <a href="#" class="text-white text-2xl font-bold no-underline">Shop All</a>
            <a href="#" class="text-white text-2xl font-bold no-underline">Collections</a>
            <a href="#" class="text-white text-2xl font-bold no-underline">About</a>
        </nav>

        <div class="flex items-center gap-x-4 ml-auto">
            <img src="user.png" alt="User" class="h-[42px] w-auto brightness-0 invert cursor-pointer hover:opacity-80 transition-opacity">
            <img src="search.png" alt="Search" class="h-[32px] w-auto brightness-0 invert cursor-pointer hover:opacity-80 transition-opacity">
            <img src="cart2.png" alt="Cart" class="h-[42px] w-auto brightness-0 invert cursor-pointer hover:opacity-80 transition-opacity">
        </div>
    </header>

    <section class="light-pink-bg py-10 px-[5%] mt-4 flex justify-between items-center shadow-sm">
        <div class="flex items-center gap-6">
            <div class="w-24 h-24 bg-white rounded-full p-1 border-2 border-white overflow-hidden shadow-md">
                <img src="user.png" alt="Profile" class="w-full h-full object-cover rounded-full">
            </div>
            <div>
                <h2 class="text-4xl font-extrabold flex items-center gap-2">
                    Dwight Ramos <i class="fa-solid fa-chevron-down text-xl"></i>
                </h2>
                <p class="text-gray-600 font-bold text-lg">Member</p>
            </div>
        </div>

        <div class="flex flex-col items-center cursor-pointer group">
            <div class="mb-1 w-14 h-14 flex items-center justify-center transition-transform group-hover:scale-110">
                <img src="settings.png" alt="Setting" class="w-12 h-12 object-contain">
            </div>
            <span class="font-bold text-sm">Setting</span>
        </div>
    </section>

    <main class="py-16 px-[5%]">
        <div class="max-w-4xl mx-auto text-center">
            <div class="flex justify-center items-center gap-4 mb-12">
                <h2 class="text-5xl font-extrabold pink-text">My Orders</h2>
                <i class="fa-solid fa-bell pink-text text-3xl"></i>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-20">
                <div class="flex flex-col items-center gap-3 group cursor-pointer">
                    <i class="fa-solid fa-wallet text-5xl"></i>
                    <span class="font-bold text-xl">To Pay</span>
                </div>
                <div class="flex flex-col items-center gap-3 group cursor-pointer">
                    <i class="fa-solid fa-box-archive text-5xl"></i>
                    <span class="font-bold text-xl">To Ship</span>
                </div>
                <div class="flex flex-col items-center gap-3 group cursor-pointer">
                    <i class="fa-solid fa-truck text-5xl"></i>
                    <span class="font-bold text-xl">To Receive</span>
                </div>
                <div class="flex flex-col items-center gap-3 group cursor-pointer">
                    <i class="fa-solid fa-calendar-check text-5xl"></i>
                    <span class="font-bold text-xl">Completed</span>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto mt-20">
            <h2 class="text-5xl font-extrabold pink-text text-center mb-12">Featured Products</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="product-card">
                    <div class="bg-gray-50 rounded-2xl aspect-square mb-4 flex items-center justify-center">
                        <img src="item1.png" alt="Item" class="max-h-full">
                    </div>
                    <h3 class="text-2xl font-bold">Item name</h3>
                    <p class="pink-text text-xl font-bold mb-4">100 PHP</p>
                    <button class="btn-add-cart">Add to cart</button>
                </div>
                <div class="product-card">
                    <div class="bg-gray-50 rounded-2xl aspect-square mb-4 flex items-center justify-center">
                        <img src="item2.png" alt="Item" class="max-h-full">
                    </div>
                    <h3 class="text-2xl font-bold">Item name</h3>
                    <p class="pink-text text-xl font-bold mb-4">100 PHP</p>
                    <button class="btn-add-cart">Add to cart</button>
                </div>
                <div class="product-card">
                    <div class="bg-gray-50 rounded-2xl aspect-square mb-4 flex items-center justify-center">
                        <img src="item3.png" alt="Item" class="max-h-full">
                    </div>
                    <h3 class="text-2xl font-bold">Item name</h3>
                    <p class="pink-text text-xl font-bold mb-4">100 PHP</p>
                    <button class="btn-add-cart">Add to cart</button>
                </div>
            </div>

            <div class="flex justify-center mt-16">
                <button class="btn-view-more shadow-lg">View More</button>
            </div>
        </div>
    </main>

    <footer class="bg-[#ffc3dc] py-16 px-[5%] flex justify-between flex-wrap text-[#ff4fa1] border-t-4 border-[#ffcae1]">
        <div class="flex-1 px-5 min-w-[280px] flex flex-col justify-between">
            <img src="Brand and logo.png" alt="ASweetenz" class="max-w-[240px]">
            <div class="mt-12 font-bold text-sm">© 2026 ASweetenz. All rights reserved.</div>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold uppercase">Information</h4>
            <ul class="list-none p-0 space-y-2 font-bold">
                <li><a href="#" class="underline">Home</a></li>
                <li><a href="#" class="underline">Shop All</a></li>
                <li><a href="#" class="underline">Collections</a></li>
                <li><a href="#" class="underline">About</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold uppercase">Support</h4>
            <ul class="list-none p-0 space-y-2 font-bold">
                <li><a href="#" class="underline">Refund Policy</a></li>
                <li><a href="#" class="underline">FAQs</a></li>
                <li><a href="#" class="underline">Privacy Policy</a></li>
                <li><a href="#" class="underline">Terms of Use</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[200px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold uppercase text-black">Contact us</h4>
            <div class="space-y-4 font-bold text-black">
                <div class="flex items-center gap-4 text-lg">
                    <i class="fa-brands fa-instagram text-2xl"></i>
                    <span>@angelicasweetenz</span>
                </div>
                <div class="flex items-center gap-4 text-lg">
                    <i class="fa-brands fa-discord text-xl"></i>
                    <span>asweetenz</span>
                </div>
                <div class="flex items-center gap-4">
                    <i class="fa-solid fa-envelope text-xl"></i>
                    <span class="text-sm">angelica.sweetenz@gmail.com</span>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>