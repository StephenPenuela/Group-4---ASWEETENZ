<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Product Details</title>
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

        /* Product Image Box */
        .product-main-frame {
            border: 15px solid #7a3a1a;
            /* Dark brown frame from mockup */
            aspect-ratio: 1/1;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            overflow: hidden;
        }

        .btn-add-cart {
            background-color: #ff4fa1;
            color: white;
            font-weight: 800;
            padding: 12px 40px;
            border-radius: 9999px;
            font-size: 2rem;
            display: inline-block;
            transition: transform 0.2s;
        }

        .btn-view-more {
            background-color: #ff4fa1;
            color: white;
            font-weight: 700;
            padding: 8px 32px;
            border-radius: 9999px;
        }

        .requirement-text {
            color: #ff4fa1;
            font-size: 0.75rem;
            font-weight: bold;
            margin-top: 8px;
            line-height: 1.2;
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

    <main class="main-bg-pattern py-16 px-[10%]">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start mb-20">
            <div class="product-main-frame shadow-xl">
                <img src="product_image.png" alt="Desktop Cat Phone Charm" class="w-full h-full object-cover">
            </div>

            <div class="flex flex-col h-full pt-4">
                <h2 class="text-[#ff4fa1] text-4xl font-black mb-2">80.00 PHP</h2>
                <h1 class="text-4xl font-black mb-6 leading-tight">Desktop Cat Phone Charm</h1>

                <div class="mb-10">
                    <h3 class="text-2xl font-black mb-2">Description</h3>
                    <p class="text-lg font-medium leading-relaxed text-gray-800">
                        A mischievous orange tabby with round glasses, caught in the middle of some internet shenanigans.
                        With a paw on the keyboard and a cheeky "He He" speech bubble, this nerdy kitty is definitely up to no good.
                    </p>
                    <p class="text-lg font-bold mt-4">Size: 2.2 x 2.4 inch</p>
                </div>

                <div class="mt-auto flex flex-col items-center md:items-start">
                    <button class="btn-add-cart shadow-lg">
                        Add to Cart
                    </button>
                    <p class="requirement-text text-center md:text-left">
                        *Minimum order Requirement: ₱200.00<br>
                        Add ₱120.00 more to checkout
                    </p>
                </div>
            </div>
        </div>

        <hr class="border-t-[12px] border-gray-200 mb-12">

        <section class="max-w-4xl">
            <div class="flex items-baseline gap-4 mb-8">
                <span class="text-3xl font-black">4.9</span>
                <i class="fa-solid fa-star text-yellow-400 text-2xl"></i>
                <span class="text-xl font-bold text-gray-500">Product Ratings (1K)</span>
            </div>

            <h2 class="text-5xl font-black mb-10">Reviews</h2>

            <div class="space-y-10 mb-12">
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span class="font-black text-lg">John Doe:</span>
                        <div class="text-yellow-400 text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium">I absolutely had to get this. It perfectly captures that chaotic energy when you're messing around online. The print quality is super crisp, and the little "He He" speech bubble is easy to read. It looks great hanging off my backpack!</p>
                </div>

                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span class="font-black text-lg">Max Verstappen:</span>
                        <div class="text-yellow-400 text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 font-medium">Bought this as a gift for my brother who works in IT, and he wouldn't stop laughing. He says it's his new spirit animal. The colors are just as vibrant as the picture, and the acrylic feels nice and sturdy. Highly recommend!</p>
                </div>
            </div>

            <button class="btn-view-more text-xl shadow-md">View More</button>
        </section>

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