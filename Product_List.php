<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Shop All</title>
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

        /* Product Card Styling */
        .product-card {
            background-color: #fbfcf8;
            /* Light off-white background from mockup */
            border-radius: 20px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: left;
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        /* Pink buttons matching mockup */
        .btn-pink-pill {
            background-color: #ff4fa1;
            color: white;
            font-weight: 700;
            padding: 6px 0;
            border-radius: 9999px;
            width: 100%;
            text-align: center;
            display: block;
            margin-top: 8px;
            font-size: 1.1rem;
        }

        .sort-link {
            font-weight: 500;
            color: #4a4a4a;
            font-size: 1.2rem;
            transition: color 0.2s;
        }

        .sort-link:hover {
            color: #ff4fa1;
        }
    </style>
</head>

<body>

    <div class="w-full h-[50px] bg-[#ffcae1]"></div>

    <header class="relative w-full h-[180px] bg-[url('banner.png')] bg-[length:100%_100%] bg-no-repeat flex items-center px-[5%] box-border">
        <div class="z-10 mt-[-20px]">
            <img src="Logo_Banner.png" alt="Logo" class="h-20">
        </div>

        <nav class="absolute left-1/2 -translate-x-1/2 flex gap-x-12">
            <a href="#" class="text-white text-2xl font-bold no-underline">Home</a>
            <a href="#" class="text-white text-2xl font-bold no-underline">Shop All</a>
            <a href="#" class="text-white text-2xl font-bold no-underline">Collections</a>
            <a href="#" class="text-white text-2xl font-bold no-underline">About</a>
        </nav>

        <div class="flex items-center gap-x-4 ml-auto z-10 mt-[-20px]">
            <img src="user.png" alt="User" class="h-[42px] brightness-0 invert cursor-pointer">
            <img src="search.png" alt="Search" class="h-[32px] brightness-0 invert cursor-pointer">
            <img src="cart2.png" alt="Cart" class="h-[42px] brightness-0 invert cursor-pointer">
        </div>
    </header>

    <main class="main-bg-pattern py-12 px-[10%] min-h-screen">

        <div class="flex justify-between items-center mb-8">
            <h1 class="text-[#ff4fa1] text-5xl font-black">Shop All</h1>
            <i class="fa-solid fa-bell text-[#ff4fa1] text-3xl"></i>
        </div>

        <div class="flex justify-between items-center mb-12">
            <button class="bg-[#ff4fa1] text-white font-bold py-2 px-8 rounded-full text-xl shadow-sm">Products</button>
            <button class="bg-[#ff4fa1] text-white font-bold py-2 px-8 rounded-full text-xl shadow-sm">Search</button>
        </div>

        <div class="flex gap-10 mb-16 items-center">
            <span class="text-2xl font-black">Sort By:</span>
            <a href="#" class="sort-link">Name</a>
            <a href="#" class="sort-link">Type</a>
            <a href="#" class="sort-link">Price</a>
            <a href="#" class="sort-link">Recents</a>
            <a href="#" class="sort-link">Popularity</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">

            <div class="product-card">
                <div class="w-full aspect-square flex items-center justify-center mb-4">
                    <img src="item1.png" alt="Item Name" class="max-h-full object-contain">
                </div>
                <div class="w-full px-2">
                    <h3 class="text-2xl font-black leading-tight">Item name</h3>
                    <p class="text-[#ff4fa1] text-xl font-black">100 PHP</p>
                    <p class="text-gray-500 font-bold text-sm mb-4">100 sold</p>

                    <a href="product-detail.html" class="btn-pink-pill opacity-80 hover:opacity-100 transition-opacity">View</a>
                    <button class="btn-pink-pill">Add to Cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="w-full aspect-square flex items-center justify-center mb-4">
                    <img src="item2.png" alt="Item Name" class="max-h-full object-contain">
                </div>
                <div class="w-full px-2">
                    <h3 class="text-2xl font-black leading-tight">Item name</h3>
                    <p class="text-[#ff4fa1] text-xl font-black">100 PHP</p>
                    <p class="text-gray-500 font-bold text-sm mb-4">67 sold</p>

                    <a href="#" class="btn-pink-pill opacity-80 hover:opacity-100 transition-opacity">View</a>
                    <button class="btn-pink-pill">Add to Cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="w-full aspect-square flex items-center justify-center mb-4">
                    <img src="item3.png" alt="Item Name" class="max-h-full object-contain">
                </div>
                <div class="w-full px-2">
                    <h3 class="text-2xl font-black leading-tight">Item name</h3>
                    <p class="text-[#ff4fa1] text-xl font-black">100 PHP</p>
                    <p class="text-gray-500 font-bold text-sm mb-4">89 sold</p>

                    <a href="#" class="btn-pink-pill opacity-80 hover:opacity-100 transition-opacity">View</a>
                    <button class="btn-pink-pill">Add to Cart</button>
                </div>
            </div>

        </div>
    </main>

    <footer class="bg-[#ffc3dc] py-16 px-[5%] flex justify-between flex-wrap text-[#ff4fa1]">
        <div class="flex-1 px-5 min-w-[280px] flex flex-col justify-between">
            <img src="Brand and logo.png" alt="ASweetenz" class="max-w-[240px]">
            <div class="mt-12 font-bold text-sm">© 2026 ASweetenz. All rights reserved.</div>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold uppercase">Information</h4>
            <ul class="list-none p-0 space-y-2">
                <li><a href="#" class="text-lg font-bold underline decoration-2">Home</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2">Shop All</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2">Collections</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2">About</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold uppercase">Support</h4>
            <ul class="list-none p-0 space-y-2">
                <li><a href="#" class="text-lg font-bold underline decoration-2">Refund Policy</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2">FAQs</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2">Privacy Policy</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2">Terms of Use</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[200px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold uppercase text-black">Contact us</h4>
            <div class="space-y-4">
                <div class="flex items-center gap-4 text-lg font-bold text-black">
                    <i class="fa-brands fa-instagram text-2xl"></i>
                    <span>@angelicasweetenz</span>
                </div>
                <div class="flex items-center gap-4 text-lg font-bold text-black">
                    <i class="fa-brands fa-discord text-xl"></i>
                    <span>asweetenz</span>
                </div>
                <div class="flex items-center gap-4 text-lg font-bold text-black">
                    <i class="fa-solid fa-envelope text-xl"></i>
                    <span class="text-base">angelica.sweetenz@gmail.com</span>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>