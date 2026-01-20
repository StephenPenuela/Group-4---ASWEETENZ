<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - My Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            background-color: #ffffff;
            color: #4a4a4a;
        }

        .main-bg-pattern {
            background-image: radial-gradient(#e5e5e5 1.5px, transparent 1.5px);
            background-size: 24px 24px;
        }

        /* Custom Checkbox */
        .item-checkbox {
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #ff4fa1;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            background: white;
        }

        .item-checkbox:checked {
            background-color: #ff4fa1;
        }

        .item-checkbox:checked::after {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: white;
            font-size: 12px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Quantity Controls */
        .qty-btn {
            width: 28px;
            height: 28px;
            background-color: #ff4fa1;
            color: white;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            transition: opacity 0.2s;
        }

        .qty-btn:hover {
            opacity: 0.9;
        }

        .checkout-active {
            background-color: #ff4fa1 !important;
        }

        .checkout-inactive {
            background-color: #d1d5db !important;
            cursor: not-allowed;
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

    <main class="main-bg-pattern min-h-screen py-16 px-10">
        <div class="max-w-[1100px] mx-auto bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">

            <div class="p-8 border-b flex justify-between items-center relative">
                <h1 class="text-[#ff4fa1] text-5xl font-black mx-auto">My Cart</h1>
                <i class="fa-solid fa-bell text-[#ff4fa1] text-3xl absolute right-10"></i>
            </div>

            <div class="px-8 py-4 flex gap-6 items-center border-b bg-gray-50/50">
                <div class="relative flex-1">
                    <input type="text" placeholder="Search orders" class="w-full border-2 border-gray-200 rounded-lg py-2 px-4 outline-none focus:border-[#ff4fa1]">
                    <i class="fa-solid fa-magnifying-glass absolute right-4 top-3 text-gray-400"></i>
                </div>
                <i class="fa-regular fa-trash-can text-3xl text-gray-500 cursor-pointer hover:text-red-500 transition-colors"></i>
            </div>

            <div class="divide-y-2 divide-gray-50">
                <div class="p-8 flex items-center gap-8">
                    <input type="checkbox" class="item-checkbox" checked>
                    <div class="w-36 h-36 bg-[#fbfcf8] border-2 border-gray-100 rounded-2xl flex items-center justify-center">
                        <img src="item1.png" alt="Product" class="max-h-[80%] object-contain">
                    </div>
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold">Item name</h3>
                        <p class="text-gray-400 font-medium">Item Description</p>
                        <div class="flex items-center gap-1 text-yellow-400 mt-2 mb-2">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-gray-400 text-sm ml-3 font-bold">10 SOLD</span>
                        </div>
                        <span class="text-[#ff4fa1] font-black text-2xl">100.00 PHP</span>
                    </div>
                    <div class="flex items-center gap-6">
                        <span class="text-xl font-bold">Quantity:</span>
                        <div class="flex items-center gap-3">
                            <input type="text" value="1" class="w-12 border-2 border-gray-200 rounded-lg text-center font-bold py-1">
                            <button class="qty-btn"><i class="fa-solid fa-minus"></i></button>
                            <button class="qty-btn"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="bg-[#fceef4] p-8 border-t-4 border-[#ff4fa1]">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-12 text-xl font-bold">
                        <div class="flex items-center gap-3">
                            <input type="checkbox" class="item-checkbox">
                            <span>Select All</span>
                        </div>
                        <div>Selected Items: (2)</div>
                        <div>Subtotal: ₱200.00</div>
                    </div>

                    <div class="flex flex-col items-center">
                        <button class="checkout-active text-white text-5xl font-black py-3 px-16 rounded-2xl shadow-lg transform transition hover:scale-105 italic">
                            Check Out
                        </button>

                    </div>
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