<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Verify Your Password</title>
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

        .verification-card {
            background-color: #fbfcf8;
            border-radius: 50px;
            /* High rounding as seen in reference */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        }

        .input-field {
            width: 100%;
            padding: 12px 25px;
            border: 2px solid #4a4a4a;
            border-radius: 25px;
            font-size: 1.4rem;
            outline: none;
            color: #4a4a4a;
        }

        .input-field::placeholder {
            color: #d1d1d1;
            font-weight: 600;
        }
    </style>
</head>

<body class="text-[#4a4a4a]">

    <main class="main-bg-pattern min-h-screen flex flex-col items-center py-12 px-6">

        <div class="mb-6">
            <img src="Logo.png" alt="ASweetenz Mascot" class="h-44 w-auto">
        </div>

        <div class="verification-card w-full max-w-[620px] p-16 text-center">
            <h2 class="text-[#ff4fa1] text-5xl font-bold mb-10">Verify Your Password</h2>

            <div class="mb-8 text-left">
                <label class="block text-xl font-bold mb-3 ml-2">
                    Enter Password <span class="text-red-500">*</span>
                </label>
                <input type="password" placeholder="Enter Password" class="input-field">
            </div>

            <button class="w-full bg-[#ff4fa1] text-white py-4 rounded-full text-3xl font-bold mb-8 hover:opacity-90 transition-opacity">
                Verify
            </button>

            <div>
                <a href="#" class="text-xl font-bold border-b-2 border-black inline-block leading-tight">
                    Return to Settings
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-[#ffc3dc] py-16 px-[5%] flex justify-between flex-wrap mt-20 text-[#ff4fa1]">
        <div class="flex-1 px-5 min-w-[280px] flex flex-col justify-between">
            <img src="Brand and logo.png" alt="ASweetenz" class="max-w-[280px]">
            <div class="mt-10 font-bold text-sm">© 2026 ASweetenz. All rights reserved.</div>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Information</h4>
            <ul class="list-none p-0 space-y-2">
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Home</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Shop All</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Collections</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">About</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Support</h4>
            <ul class="list-none p-0 space-y-2">
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Refund Policy</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">FAQs</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Privacy Policy</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Terms of Use</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Customer Service</h4>
            <ul class="list-none p-0 space-y-2">
                <li><a href="#" class="text-lg font-semibold underline decoration-2 leading-tight">Return & Exchange Policy</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Shipping Policy</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Privacy Policy</a></li>
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Order Tracking</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[250px]">
            <h4 class="mt-0 mb-6 text-2xl font-bold">Contact us</h4>
            <div class="space-y-4">
                <div class="flex items-center gap-4 text-lg font-semibold">
                    <i class="fa-brands fa-instagram text-2xl text-black"></i>
                    <span>@angelicasweetenz</span>
                </div>
                <div class="flex items-center gap-4 text-lg font-semibold">
                    <i class="fa-brands fa-discord text-xl text-black"></i>
                    <span>asweetenz</span>
                </div>
                <div class="flex items-center gap-4 text-lg font-semibold">
                    <i class="fa-solid fa-envelope text-xl text-black"></i>
                    <span class="text-base">angelica.sweetenz@gmail.com</span>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>