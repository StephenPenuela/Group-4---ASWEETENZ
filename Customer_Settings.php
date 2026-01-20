<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            background-color: #ffffff;
        }

        .main-bg-pattern {
            background-image: radial-gradient(#e5e5e5 1px, transparent 1px);
            background-size: 20px 20px;
        }

        /* Zebra striping to match the image */
        .settings-list div:nth-child(even) {
            background-color: #f9f9f9;
        }

        .settings-row {
            padding: 20px 0;
            transition: all 0.2s;
            cursor: pointer;
            border-bottom: 1px solid #eeeeee;
        }

        .settings-row:hover {
            padding-left: 10px;
            color: #ff4fa1;
        }

        /* Custom Checkbox */
        .custom-checkbox {
            appearance: none;
            width: 28px;
            height: 28px;
            border: 2.5px solid #ff4fa1;
            border-radius: 6px;
            cursor: pointer;
            position: relative;
            background: white;
        }

        .custom-checkbox:checked::after {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: #ff4fa1;
            font-size: 16px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .btn-logout {
            background-color: #ff4fa1;
            color: white;
            padding: 12px 80px;
            border-radius: 9999px;
            font-size: 1.8rem;
            font-weight: 700;
            transition: transform 0.2s;
            box-shadow: 0 4px 15px rgba(255, 79, 161, 0.3);
        }

        .btn-logout:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="text-[#4a4a4a]">

    <header class="bg-[#fbfcf8] w-full py-8 px-10 border-b border-gray-50">
        <div class="max-w-full mx-auto relative text-center">
            <a href="javascript:history.back()" class="absolute left-0 top-1/2 -translate-y-1/2 hover:opacity-70 transition-opacity">
                <img src="back.png" alt="Back" class="h-10 w-auto">
            </a>

            <h1 class="text-[#ff4fa1] text-5xl font-bold uppercase leading-tight tracking-widest">
                Settings
            </h1>
        </div>
    </header>

    <main class="main-bg-pattern min-h-[600px] py-12 px-10">
        <div class="max-w-[1000px] mx-auto">

            <div class="settings-list flex flex-col mb-20">
                <div class="settings-row text-3xl font-medium px-4">
                    Account Information
                </div>
                <div class="settings-row text-3xl font-medium px-4">
                    Address Details
                </div>
                <div class="settings-row text-3xl font-medium px-4">
                    Payment Method
                </div>
                <div class="settings-row text-3xl font-medium px-4">
                    Terms and Conditions
                </div>
                <div class="settings-row text-3xl font-medium px-4 flex justify-between items-center cursor-default hover:pl-4 hover:text-[#4a4a4a]">
                    <span>Notification Preferences:</span>
                    <input type="checkbox" class="custom-checkbox" checked>
                </div>
            </div>

            <div class="flex justify-center mt-12">
                <button class="btn-logout uppercase italic">
                    Logout
                </button>
            </div>
        </div>
    </main>

    <footer class="bg-[#ffc3dc] py-16 px-[5%] flex justify-between flex-wrap text-[#ff4fa1]">
        <div class="flex-1 px-5 min-w-[280px] flex flex-col justify-between">
            <img src="Brand and logo.png" alt="ASweetenz" class="max-w-[280px]">
            <div class="mt-10 font-bold text-sm">© 2026 ASweetenz. All rights reserved.</div>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Information</h4>
            <ul class="list-none p-0 space-y-2 font-semibold">
                <li><a href="#" class="text-lg underline decoration-2">Home</a></li>
                <li><a href="#" class="text-lg underline decoration-2">Shop All</a></li>
                <li><a href="#" class="text-lg underline decoration-2">Collections</a></li>
                <li><a href="#" class="text-lg underline decoration-2">About</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Support</h4>
            <ul class="list-none p-0 space-y-2 font-semibold">
                <li><a href="#" class="text-lg underline decoration-2">Refund Policy</a></li>
                <li><a href="#" class="text-lg underline decoration-2">FAQs</a></li>
                <li><a href="#" class="text-lg underline decoration-2">Privacy Policy</a></li>
                <li><a href="#" class="text-lg underline decoration-2">Terms of Use</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Customer Service</h4>
            <ul class="list-none p-0 space-y-2 font-semibold">
                <li><a href="#" class="text-lg underline decoration-2 leading-tight">Return & Exchange Policy</a></li>
                <li><a href="#" class="text-lg underline decoration-2">Shipping Policy</a></li>
                <li><a href="#" class="text-lg underline decoration-2">Order Tracking</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[250px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Contact us</h4>
            <div class="space-y-4 font-semibold">
                <div class="flex items-center gap-4 text-lg">
                    <i class="fa-brands fa-instagram text-2xl text-black"></i>
                    <span>@angelicasweetenz</span>
                </div>
                <div class="flex items-center gap-4 text-lg">
                    <i class="fa-brands fa-discord text-xl text-black"></i>
                    <span>asweetenz</span>
                </div>
                <div class="flex items-center gap-4 text-lg">
                    <i class="fa-solid fa-envelope text-xl text-black"></i>
                    <span class="text-base">angelica.sweetenz@gmail.com</span>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>