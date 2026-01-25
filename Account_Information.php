<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Account Information</title>
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

        .input-box {
            width: 100%;
            padding: 10px 15px;
            border: 2px solid #b3b3b3;
            border-radius: 4px;
            font-size: 1.1rem;
            color: #4a4a4a;
            outline: none;
            background-color: white;
            transition: border-color 0.2s;
            font-family: 'Fredoka', sans-serif;
        }

        .input-box:focus {
            border-color: #ff4fa1;
        }

        .btn-fredoka {
            font-family: 'Fredoka', sans-serif;
        }
    </style>
</head>

<body class="text-[#4a4a4a]">

    <header class="bg-[#fbfcf8] w-full py-6 px-10 border-b border-gray-50">
        <div class="max-w-full mx-auto relative text-center">
            <a href="javascript:history.back()" class="absolute left-0 top-1/2 -translate-y-1/2 hover:opacity-70 transition-opacity">
                <img src="back.png" alt="Back" class="h-10 w-auto">
            </a>

            <h1 class="text-[#ff4fa1] text-4xl font-bold uppercase leading-tight tracking-wide">
                Account<br>Information
            </h1>
        </div>
    </header>

    <main class="main-bg-pattern min-h-[700px] py-16 px-10">
        <div class="max-w-[1000px] mx-auto">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-8">
                <div class="space-y-8">
                    <div>
                        <label class="block text-xl font-bold mb-2">Username</label>
                        <input type="text" placeholder="Dwight Ramos" class="input-box">
                    </div>

                    <div>
                        <label class="block text-xl font-bold mb-2">Password</label>
                        <input type="password" placeholder="secretpassword" class="input-box">
                    </div>

                    <div>
                        <label class="block text-xl font-bold mb-2">Active Email</label>
                        <input type="email" placeholder="dwightramos@gmail.com" class="input-box">
                    </div>

                    <div>
                        <label class="block text-xl font-bold mb-2">Phone Number</label>
                        <input type="text" placeholder="+63 9950180056" class="input-box">
                    </div>
                </div>

                <div class="flex flex-col justify-between">
                    <div class="space-y-8">
                        <div>
                            <label class="block text-xl font-bold mb-2">Account ID</label>
                            <input type="text" placeholder="1234567890" class="input-box">
                        </div>

                        <div class="h-[78px] flex items-end">
                            <a href="#" class="text-xl font-bold flex items-center gap-3 hover:text-[#ff4fa1] transition-colors btn-fredoka">
                                <i class="fa-regular fa-pen-to-square"></i> Change Password
                            </a>
                        </div>

                        <div class="h-[78px] flex items-end">
                            <a href="#" class="text-xl font-bold flex items-center gap-3 hover:text-[#ff4fa1] transition-colors btn-fredoka">
                                <i class="fa-regular fa-pen-to-square"></i> Change Email
                            </a>
                        </div>
                    </div>

                    <div class="flex justify-end mt-8">
                        <button onclick="saveChanges()" class="bg-[#ff4fa1] text-white px-10 py-2 rounded-full text-2xl font-bold shadow-md hover:scale-105 transition-transform italic uppercase btn-fredoka">
                            SAVE
                        </button>
                    </div>
                </div>
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
                <li><a href="#" class="text-lg font-semibold underline decoration-2">Commission</a></li>
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

    <script>
        function saveChanges() {
            alert("Success! Your account information has been updated.");
        }
    </script>

</body>

</html>