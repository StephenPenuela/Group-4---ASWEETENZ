<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - To Receive</title>
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

        /* Status Tabs */
        .status-tab {
            background-color: #ffcae1;
            color: white;
            padding: 10px 25px;
            border-radius: 9999px;
            font-weight: 700;
            font-size: 1.25rem;
            transition: all 0.2s;
        }

        .status-tab.active {
            background-color: #ff4fa1;
        }

        /* Order Row Styling */
        .order-row {
            background-color: white;
            border-bottom: 4px solid #f3f4f6;
            padding: 25px 0;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .btn-track {
            background-color: #ff4fa1;
            color: white;
            font-weight: 700;
            padding: 12px 40px;
            border-radius: 9999px;
            font-size: 1.5rem;
            transition: transform 0.2s;
        }

        .btn-track:hover {
            transform: scale(1.05);
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
            <a href="#" class="text-white text-2xl font-bold no-underline">Commission</a>
            <a href="#" class="text-white text-2xl font-bold no-underline">About</a>
        </nav>

        <div class="flex items-center gap-x-4 ml-auto z-10 mt-[-20px]">
            <img src="user.png" alt="User" class="h-[42px] brightness-0 invert cursor-pointer">
            <img src="search.png" alt="Search" class="h-[32px] brightness-0 invert cursor-pointer">
            <img src="cart2.png" alt="Cart" class="h-[42px] brightness-0 invert cursor-pointer">
        </div>
    </header>

    <main class="main-bg-pattern min-h-screen py-12 px-[10%]">

        <div class="text-center mb-8 relative max-w-6xl mx-auto">
            <h1 class="pink-text text-6xl font-black uppercase">My Orders</h1>
            <div class="absolute right-0 top-1/2 -translate-y-1/2">
                <i class="fa-solid fa-bell text-[#ff4fa1] text-4xl"></i>
            </div>
        </div>

        <div class="flex flex-wrap justify-center gap-4 mb-8">
            <button class="status-tab">To Pay/Processing</button>
            <button class="status-tab">To Ship</button>
            <button class="status-tab active">To Receive</button>
            <button class="status-tab">Completed</button>
        </div>

        <div class="flex justify-center gap-8 mb-10 text-xl font-bold text-gray-700">
            <button class="hover:pink-text">Name</button>
            <button class="hover:pink-text">Type</button>
            <button class="hover:pink-text">Price</button>
            <button class="hover:pink-text">Recents</button>
        </div>

        <div class="max-w-6xl mx-auto">

            <div class="order-row">
                <img src="commission1.png" alt="Product" class="w-32 h-32 object-contain">
                <div class="flex-1">
                    <h3 class="text-2xl font-black">Order No.</h3>
                    <p class="text-gray-500 font-bold">Order Descrip</p>
                    <p class="pink-text text-xl font-bold mt-4">100 PHP</p>
                </div>
                <div class="flex-1 text-center">
                    <p class="text-xl font-bold">Order Status: <span class="text-black">Out for Delivery</span></p>
                </div>
                <div class="flex-1 text-right">
                    <button class="btn-track">Track My Order</button>
                </div>
            </div>

            <div class="order-row">
                <img src="commission2.png" alt="Product" class="w-32 h-32 object-contain">
                <div class="flex-1">
                    <h3 class="text-2xl font-black">Order No.</h3>
                    <p class="text-gray-500 font-bold">Order Descrip</p>
                    <p class="pink-text text-xl font-bold mt-4">100 PHP</p>
                </div>
                <div class="flex-1 text-center">
                    <p class="text-xl font-bold">Order Status: <span class="text-black">Arrived at Sorting Center</span></p>
                </div>
                <div class="flex-1 text-right">
                    <button class="btn-track">Track My Order</button>
                </div>
            </div>

            <div class="order-row">
                <img src="commission3.png" alt="Product" class="w-32 h-32 object-contain">
                <div class="flex-1">
                    <h3 class="text-2xl font-black">Order No.</h3>
                    <p class="text-gray-500 font-bold">Order Descrip</p>
                    <p class="pink-text text-xl font-bold mt-4">100 PHP</p>
                </div>
                <div class="flex-1 text-center">
                    <p class="text-xl font-bold">Order Status: <span class="text-black">Order Delayed</span></p>
                </div>
                <div class="flex-1 text-right">
                    <button class="btn-track">Track My Order</button>
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