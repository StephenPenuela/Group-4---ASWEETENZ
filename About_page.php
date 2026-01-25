<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ASweetenz</title>
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

        .section-divider {
            border-top: 2.5px solid #ff4fa1;
            margin: 5rem 0;
            width: 100%;
        }

        /* Content Typography Spacing */
        .content-heading {
            font-size: 2.75rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }

        .content-paragraph {
            font-size: 1.25rem;
            font-weight: 500;
            line-height: 1.6;
            color: #4a4a4a;
        }

        .partnership-box {
            border: 4px solid #ff4fa1;
            border-top-right-radius: 80px;
            border-bottom-left-radius: 80px;
            background-color: #f3f4f6;
            aspect-ratio: 1 / 1;
            display: flex;
            align-items: center;
            justify-content: center;
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

    <main class="main-bg-pattern pt-20 pb-20">
        <div class="max-w-5xl mx-auto px-8">

            <div class="flex justify-center items-center gap-6 mb-20">
                <h1 class="pink-text text-6xl font-bold uppercase tracking-tight">About Us</h1>
                <i class="fa-solid fa-bell pink-text text-4xl"></i>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-24">
                <img src="Owner_about_page.webp" alt="Marian Marzalado" class="w-full rounded-2xl shadow-sm border-2 border-gray-100">
                <div class="flex flex-col">
                    <h2 class="text-5xl font-bold mb-1">Marian Marzalado</h2>
                    <h3 class="pink-text text-3xl font-bold mb-6">CEO, ASweetenz</h3>
                    <p class="content-paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>

            <div class="mb-20">
                <h2 class="content-heading">What we do</h2>
                <p class="content-paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>

            <div class="section-divider"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-24">
                <div>
                    <h2 class="content-heading">ASweetenz</h2>
                    <p class="content-paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <img src="Design_About_page.webp" alt="ASweetenz Design" class="w-full">
            </div>

            <div class="section-divider"></div>

            <div class="mb-24">
                <h2 class="text-5xl font-bold text-center mb-16">Partnership Brands</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-16 items-center">
                    <div class="partnership-box">
                        <i class="fa-regular fa-image text-7xl text-gray-300"></i>
                    </div>
                    <p class="content-paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <p class="content-paragraph order-last md:order-none">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="bg-gray-100 aspect-video rounded-3xl border-4 border-black flex items-center justify-center">
                        <i class="fa-regular fa-image text-7xl text-gray-300"></i>
                    </div>
                </div>
            </div>

            <div class="section-divider"></div>

            <div class="text-center mb-12">
                <h2 class="text-5xl font-bold mb-8">Promos</h2>
                <p class="content-paragraph max-w-3xl mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>

        </div>
    </main>

    <footer class="bg-[#ffc3dc] py-16 px-[5%] flex justify-between flex-wrap text-[#ff4fa1] border-t-2 border-[#ffcae1]">
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