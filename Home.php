<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Home</title>
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

        /* Collection Box Shape matching mockup */
        .collection-box {
            border: 4px solid #ff4fa1;
            border-top-right-radius: 80px;
            border-bottom-left-radius: 80px;
            aspect-ratio: 1/1;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: #f3f4f6;
        }

        .btn-pink {
            background-color: #ff4fa1;
            color: white;
            font-weight: 700;
            padding: 12px 32px;
            border-radius: 9999px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: opacity 0.2s;
        }

        .btn-pink:hover {
            opacity: 0.9;
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

    <section class="relative w-full h-[650px]">
        <img src="Hero_Home.webp" alt="Home Hero" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
            <button class="btn-pink text-3xl px-16 py-6 shadow-xl">
                Shop Now <i class="fa-solid fa-bell"></i>
            </button>
        </div>
    </section>

    <main class="main-bg-pattern py-20 px-[5%]">

        <div class="mb-24">
            <div class="flex justify-center items-center gap-4 mb-16">
                <h2 class="text-6xl font-bold uppercase tracking-tight">Featured Items</h2>
                <i class="fa-solid fa-bell pink-text text-4xl"></i>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <div class="text-center">
                    <div class="bg-gray-200 aspect-square rounded-3xl mb-4 border-2 border-gray-100"></div>
                    <p class="text-2xl font-bold mb-1">Item name</p>
                    <p class="pink-text text-xl font-bold">Price</p>
                </div>
                <div class="text-center">
                    <div class="bg-gray-200 aspect-square rounded-3xl mb-4 border-2 border-gray-100"></div>
                    <p class="text-2xl font-bold mb-1">Item name</p>
                    <p class="pink-text text-xl font-bold">Price</p>
                </div>
                <div class="text-center">
                    <div class="bg-gray-200 aspect-square rounded-3xl mb-4 border-2 border-gray-100"></div>
                    <p class="text-2xl font-bold mb-1">Item name</p>
                    <p class="pink-text text-xl font-bold">Price</p>
                </div>
                <div class="text-center">
                    <div class="bg-gray-200 aspect-square rounded-3xl mb-4 border-2 border-gray-100"></div>
                    <p class="text-2xl font-bold mb-1">Item name</p>
                    <p class="pink-text text-xl font-bold">Price</p>
                </div>
            </div>

            <div class="flex justify-center mt-16">
                <button class="btn-pink text-xl px-12">See More</button>
            </div>
        </div>

        <hr class="border-t-2 border-[#ff4fa1] mb-24">

        <div class="mb-24">
            <div class="flex justify-center items-center gap-4 mb-16">
                <h2 class="text-6xl font-bold uppercase tracking-tight">Collections</h2>
                <i class="fa-solid fa-bell pink-text text-4xl"></i>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-7xl mx-auto">
                <div class="flex flex-col items-center">
                    <div class="collection-box w-full">
                        <i class="fa-regular fa-image text-7xl text-gray-300"></i>
                    </div>
                    <h3 class="text-3xl font-bold mt-6">Collection name</h3>
                </div>
                <div class="flex flex-col items-center">
                    <div class="collection-box w-full">
                        <i class="fa-regular fa-image text-7xl text-gray-300"></i>
                    </div>
                    <h3 class="text-3xl font-bold mt-6">Collection name</h3>
                </div>
                <div class="flex flex-col items-center">
                    <div class="collection-box w-full">
                        <i class="fa-regular fa-image text-7xl text-gray-300"></i>
                    </div>
                    <h3 class="text-3xl font-bold mt-6">Collection name</h3>
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