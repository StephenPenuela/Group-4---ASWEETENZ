<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Collections</title>
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

        /* Collection Row Styling */
        .collection-row {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 20px 40px;
            display: flex;
            align-items: center;
            gap: 40px;
            border: 1px solid #f3f4f6;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-bottom: 24px;
        }

        .collection-row:hover {
            transform: scale(1.01);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
        }

        .collection-img-container {
            width: 180px;
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .collection-img-container img {
            max-height: 100%;
        }

        .btn-view-collection {
            background-color: #ff4fa1;
            color: white;
            font-weight: 800;
            padding: 10px 45px;
            border-radius: 9999px;
            font-size: 1.5rem;
            margin-left: auto;
            opacity: 0.85;
            transition: opacity 0.2s;
        }

        .btn-view-collection:hover {
            opacity: 1;
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
            <a href="#" class="text-white text-2xl font-bold no-underline">Commission</a>
            <a href="#" class="text-white text-2xl font-bold no-underline">About</a>
        </nav>

        <div class="flex items-center gap-x-4 ml-auto z-10 mt-[-20px]">
            <img src="user.png" alt="User" class="h-[42px] brightness-0 invert cursor-pointer">
            <img src="search.png" alt="Search" class="h-[32px] brightness-0 invert cursor-pointer">
            <img src="cart2.png" alt="Cart" class="h-[42px] brightness-0 invert cursor-pointer">
        </div>
    </header>

    <main class="main-bg-pattern py-12 px-[10%] min-h-screen">

        <div class="flex justify-between items-center mb-12">
            <h1 class="text-[#ff4fa1] text-6xl font-black">Collections</h1>
            <i class="fa-solid fa-bell text-[#ff4fa1] text-4xl"></i>
        </div>

        <div class="max-w-6xl mx-auto space-y-6">

            <div class="collection-row shadow-sm">
                <div class="collection-img-container">
                    <img src="sticker_collection.png" alt="Stickers">
                </div>
                <div>
                    <h2 class="text-5xl font-black">Stickers</h2>
                    <p class="text-[#ff4fa1] text-2xl font-bold">210 Items</p>
                </div>
                <button class="btn-view-collection">View</button>
            </div>

            <div class="collection-row shadow-sm">
                <div class="collection-img-container">
                    <img src="charms_collection.png" alt="Charms">
                </div>
                <div>
                    <h2 class="text-5xl font-black">Charms</h2>
                    <p class="text-[#ff4fa1] text-2xl font-bold">210 Items</p>
                </div>
                <button class="btn-view-collection">View</button>
            </div>

            <div class="collection-row shadow-sm">
                <div class="collection-img-container">
                    <img src="keychain_collection.png" alt="Keychains">
                </div>
                <div>
                    <h2 class="text-5xl font-black">Keychains</h2>
                    <p class="text-[#ff4fa1] text-2xl font-bold">210 Items</p>
                </div>
                <button class="btn-view-collection">View</button>
            </div>

            <div class="collection-row shadow-sm">
                <div class="collection-img-container">
                    <img src="totebag_collection.png" alt="Totebags">
                </div>
                <div>
                    <h2 class="text-5xl font-black">Totebags</h2>
                    <p class="text-[#ff4fa1] text-2xl font-bold">210 Items</p>
                </div>
                <button class="btn-view-collection">View</button>
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