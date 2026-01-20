<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Notifications</title>
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

        .notification-card {
            background-color: white;
            border-bottom: 4px solid #f3f4f6;
            padding: 32px 0;
            display: flex;
            gap: 32px;
            align-items: start;
        }

        .btn-pink-sm {
            background-color: #ff4fa1;
            color: white;
            font-weight: 700;
            padding: 10px 24px;
            border-radius: 9999px;
            display: inline-block;
            margin-top: 15px;
            transition: transform 0.2s;
            text-transform: uppercase;
        }

        .btn-pink-sm:hover {
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
            <a href="#" class="text-white text-2xl font-bold no-underline">Collections</a>
            <a href="#" class="text-white text-2xl font-bold no-underline">About</a>
        </nav>

        <div class="flex items-center gap-x-4 ml-auto z-10 mt-[-20px]">
            <img src="user.png" alt="User" class="h-[42px] brightness-0 invert cursor-pointer">
            <img src="search.png" alt="Search" class="h-[32px] brightness-0 invert cursor-pointer">
            <img src="cart2.png" alt="Cart" class="h-[42px] brightness-0 invert cursor-pointer">
        </div>
    </header>

    <main class="main-bg-pattern min-h-screen py-16 px-[10%]">

        <div class="text-center mb-16">
            <h1 class="pink-text text-6xl font-black uppercase mb-8">Notifications</h1>

            <div class="relative max-w-3xl mx-auto flex items-center gap-4">
                <div class="relative flex-1">
                    <input type="text" placeholder="Search orders"
                        class="w-full border-2 border-gray-200 rounded-full py-3 px-8 text-xl focus:outline-none focus:border-[#ff4fa1]">
                    <i class="fa-solid fa-magnifying-glass absolute right-6 top-1/2 -translate-y-1/2 text-gray-300 text-xl"></i>
                </div>
                <button class="text-3xl text-gray-700 hover:pink-text transition-colors">
                    <i class="fa-solid fa-filter"></i>
                </button>
            </div>
        </div>

        <div class="max-w-6xl mx-auto">

            <div class="notification-card">
                <img src="dying_item.png" alt="Product" class="w-40 h-40 object-contain bg-gray-50 rounded-2xl">
                <div class="flex-1 grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-3xl font-black">Item Delivered</h3>
                        <div class="text-lg text-gray-600 space-y-1 mt-4 font-medium">
                            <p>Delivery Address: <span class="text-black">[Address here]</span></p>
                            <p>Recipient's Name: <span class="text-black">[Name]</span></p>
                            <p>Mode of Payment: <span class="text-black">[Mode]</span></p>
                        </div>
                        <a href="#" class="btn-pink-sm">Write A Review!</a>
                    </div>
                    <div class="lg:text-right text-gray-500 font-bold text-lg space-y-1">
                        <p>Date Ordered: MM/DD/YYYY</p>
                        <p>Quantity: 1</p>
                        <p>Subtotal: ---</p>
                        <p>Commission (10%): ---</p>
                        <p>Delivery Fee: ---</p>
                        <p class="pink-text text-3xl mt-4 italic uppercase">Total: ---</p>
                    </div>
                </div>
            </div>

            <div class="notification-card">
                <img src="them_issue.png" alt="Product" class="w-40 h-40 object-contain bg-gray-50 rounded-2xl">
                <div class="flex-1 grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-3xl font-black">An item on your cart is low on stock!</h3>
                        <p class="text-gray-500 font-bold mt-2">Hurry before it runs out!</p>
                        <a href="#" class="btn-pink-sm">View Cart</a>
                    </div>
                    <div class="lg:text-right text-gray-500 font-bold text-lg">
                        <p>Date Tagged: MM/DD/YYYY</p>
                    </div>
                </div>
            </div>

            <div class="notification-card">
                <img src="bunny_cry.png" alt="Product" class="w-40 h-40 object-contain bg-gray-50 rounded-2xl">
                <div class="flex-1 flex flex-col md:flex-row justify-between">
                    <div>
                        <h3 class="text-3xl font-black uppercase">New ITEMS IN STORE!</h3>
                        <p class="text-gray-500 font-bold text-xl mt-2 italic">Check out our latest arrivals</p>
                        <a href="#" class="btn-pink-sm">View Products</a>
                    </div>
                    <div class="md:text-right text-gray-500 font-bold text-lg mt-4 md:mt-0">
                        <p>Date Added: 12/12/2025</p>
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