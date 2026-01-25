<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Track Order</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            background-color: #ffffff;
            color: #000000;
        }

        .pink-text {
            color: #ff4fa1;
        }

        .pink-bg {
            background-color: #ff4fa1;
        }

        /* Tracking Timeline Styling */
        .timeline-container {
            position: relative;
            padding: 40px 0;
            margin-bottom: 60px;
        }

        .timeline-line {
            position: absolute;
            top: 55px;
            left: 5%;
            right: 5%;
            height: 4px;
            background-color: #e5e7eb;
            /* Default Gray */
            z-index: 1;
        }

        .timeline-progress {
            position: absolute;
            top: 55px;
            left: 5%;
            height: 4px;
            background-color: #ff4fa1;
            /* Active Pink */
            z-index: 2;
            transition: width 0.5s ease;
        }

        .step-node {
            position: relative;
            z-index: 3;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 25%;
        }

        .check-circle {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
            font-size: 1.2rem;
        }

        .status-icon {
            font-size: 2.5rem;
            margin-top: 8px;
            color: #d1d5db;
            /* Default Gray Icon */
        }

        .active-icon {
            color: #ff4fa1;
            /* Active Pink Icon */
        }

        .status-label {
            font-weight: 700;
            font-size: 0.85rem;
            margin-top: 4px;
            color: #9ca3af;
        }

        .active-label {
            color: #ff4fa1;
        }
    </style>
</head>

<body>

    <div class="w-full h-[50px] bg-[#ffcae1]"></div>

    <header class="relative w-full h-[180px] bg-[url('banner.png')] bg-[length:100%_100%] bg-no-repeat flex items-center px-[5%] box-border text-white">
        <div class="z-10 mt-[-20px]"><img src="Logo_Banner.png" alt="Logo" class="h-20"></div>
        <nav class="absolute left-1/2 -translate-x-1/2 flex gap-x-12 font-bold text-2xl">
            <a href="#" class="no-underline">Home</a>
            <a href="#" class="no-underline">Shop All</a>
            <a href="#" class="no-underline">Collections</a>
            <a href="#" class="no-underline">Commission</a>
            <a href="#" class="no-underline">About</a>
        </nav>
        <div class="flex items-center gap-x-4 ml-auto z-10 mt-[-20px]">
            <img src="user.png" alt="User" class="h-[42px] brightness-0 invert cursor-pointer">
            <img src="search.png" alt="Search" class="h-[32px] brightness-0 invert cursor-pointer">
            <img src="cart2.png" alt="Cart" class="h-[42px] brightness-0 invert cursor-pointer">
        </div>
    </header>

    <main class="max-w-6xl mx-auto py-12 px-6">

        <div class="text-center mb-16">
            <h1 class="pink-text text-6xl font-black uppercase inline-block relative">
                My Orders
                <i class="fa-solid fa-bell text-[#ff4fa1] text-3xl absolute -right-12 top-2"></i>
            </h1>
        </div>

        <section class="mb-20">
            <div class="flex justify-between items-start mb-4">
                <div class="flex items-center gap-4">
                    <i class="fa-solid fa-cart-shopping pink-text text-3xl"></i>
                    <div>
                        <p class="text-xl font-bold">Order ID: <span class="uppercase">LOREM</span></p>
                        <p class="text-xl font-bold">Tracking ID: <span class="uppercase">LOREM</span></p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-xl font-bold">Expected Arrival: <span class="text-gray-400">--/--/--</span></p>
                </div>
            </div>

            <div class="timeline-container flex justify-between">
                <div class="timeline-line"></div>
                <div class="timeline-progress" style="width: 0%;"></div>

                <div class="step-node">
                    <div class="check-circle bg-gray-200 text-white"><i class="fa-solid fa-check"></i></div>
                    <i class="fa-solid fa-box status-icon"></i>
                    <span class="status-label">Order Placed</span>
                </div>
                <div class="step-node">
                    <div class="check-circle bg-gray-200 text-white"><i class="fa-solid fa-magnifying-glass"></i></div>
                    <i class="fa-solid fa-gears status-icon"></i>
                    <span class="status-label">Processing</span>
                </div>
                <div class="step-node">
                    <div class="check-circle bg-gray-200 text-white"><i class="fa-solid fa-check"></i></div>
                    <i class="fa-solid fa-truck-ramp-box status-icon"></i>
                    <span class="status-label">Ready to ship</span>
                </div>
                <div class="step-node">
                    <div class="check-circle bg-gray-200 text-white"><i class="fa-solid fa-check"></i></div>
                    <i class="fa-solid fa-house-chimney status-icon"></i>
                    <span class="status-label">Delivered</span>
                </div>
            </div>
            <hr class="border-t-2 border-pink-200">
        </section>

        <section class="mb-20">
            <div class="flex justify-between items-start mb-4">
                <div class="flex items-center gap-4">
                    <i class="fa-solid fa-cart-shopping pink-text text-3xl"></i>
                    <div>
                        <p class="text-xl font-bold">Order ID: <span class="uppercase">LOREM</span></p>
                        <p class="text-xl font-bold">Tracking ID: <span class="uppercase">LOREM</span></p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-xl font-bold">Expected Arrival: <span class="text-gray-400">--/--/--</span></p>
                </div>
            </div>

            <div class="timeline-container flex justify-between">
                <div class="timeline-line"></div>
                <div class="timeline-progress" style="width: 66%;"></div>

                <div class="step-node">
                    <div class="check-circle pink-bg text-white"><i class="fa-solid fa-check"></i></div>
                    <i class="fa-solid fa-box status-icon active-icon"></i>
                    <span class="status-label active-label">Order Placed</span>
                </div>
                <div class="step-node">
                    <div class="check-circle pink-bg text-white"><i class="fa-solid fa-check"></i></div>
                    <i class="fa-solid fa-gears status-icon active-icon"></i>
                    <span class="status-label active-label">Processing</span>
                </div>
                <div class="step-node">
                    <div class="check-circle pink-bg text-white"><i class="fa-solid fa-check"></i></div>
                    <i class="fa-solid fa-truck-ramp-box status-icon active-icon"></i>
                    <span class="status-label active-label">Ready to ship</span>
                </div>
                <div class="step-node">
                    <div class="check-circle bg-gray-200 text-white"><i class="fa-solid fa-check"></i></div>
                    <i class="fa-solid fa-house-chimney status-icon"></i>
                    <span class="status-label">Delivered</span>
                </div>
            </div>
            <hr class="border-t-2 border-pink-200">
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
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">Home</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">Shop All</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">Collections</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">About</a></li>
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