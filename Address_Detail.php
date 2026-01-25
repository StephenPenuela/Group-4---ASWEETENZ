<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - My Address</title>
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
            background-image: radial-gradient(#e5e5e5 1px, transparent 1px);
            background-size: 20px 20px;
        }

        .address-card {
            background: white;
            border: 1px solid #d1d1d1;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: box-shadow 0.2s;
        }

        .address-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .btn-use {
            background-color: #ff007a;
            color: white;
            font-weight: 700;
            padding: 4px 20px;
            border-radius: 9999px;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .edit-link {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
        }

        .add-address-box {
            border: 1px solid #d1d1d1;
            border-radius: 12px;
            height: 120px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #ff4fa1;
            transition: background-color 0.2s;
        }

        .add-address-box:hover {
            background-color: #fff9fb;
        }
    </style>
</head>

<body>

    <header class="bg-[#fbfcf8] w-full py-8 px-10 border-b border-gray-50">
        <div class="max-w-full mx-auto relative text-center">
            <a href="javascript:history.back()" class="absolute left-0 top-1/2 -translate-y-1/2 hover:opacity-70 transition-opacity">
                <img src="back.png" alt="Back" class="h-10 w-auto">
            </a>

            <h1 class="text-[#ff4fa1] text-4xl font-bold uppercase leading-tight tracking-widest">
                MY<br>ADDRESS
            </h1>
        </div>
    </header>

    <main class="main-bg-pattern min-h-[800px] py-12 px-10">
        <div class="max-w-[900px] mx-auto space-y-10">

            <section>
                <h2 class="text-2xl font-bold mb-4">Active Address</h2>
                <div class="address-card">
                    <div class="flex items-center gap-6">
                        <img src="location.png" alt="Location" class="w-12 h-12 object-contain">
                        <div>
                            <h3 class="text-xl font-bold">Username</h3>
                            <p class="text-sm text-gray-500 leading-tight">
                                Contact Number<br>
                                Active Email<br>
                                Active Address
                            </p>
                        </div>
                    </div>
                    <div class="edit-link hover:text-[#ff4fa1]">
                        <img src="edit.png" alt="Edit" class="w-6 h-6 object-contain">
                        <span>Edit</span>
                    </div>
                </div>
            </section>

            <section class="space-y-4">
                <h2 class="text-2xl font-bold mb-4">Saved Address</h2>

                <div class="add-address-box">
                    <i class="fa-solid fa-plus text-4xl mb-1"></i>
                    <span class="text-xs font-bold uppercase">Add Address</span>
                </div>

                <div class="address-card">
                    <div class="flex items-center gap-6">
                        <img src="location.png" alt="Location" class="w-12 h-12 object-contain">
                        <div>
                            <h3 class="text-xl font-bold">Username</h3>
                            <p class="text-sm text-gray-500 leading-tight">
                                Contact Number<br>
                                Active Email<br>
                                Active Address
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-6">
                        <button class="btn-use">Use</button>
                        <div class="edit-link hover:text-[#ff4fa1]">
                            <img src="edit.png" alt="Edit" class="w-6 h-6 object-contain">
                            <span>Edit</span>
                        </div>
                    </div>
                </div>

                <div class="address-card">
                    <div class="flex items-center gap-6">
                        <img src="location.png" alt="Location" class="w-12 h-12 object-contain">
                        <div>
                            <h3 class="text-xl font-bold">Username</h3>
                            <p class="text-sm text-gray-500 leading-tight">
                                Contact Number<br>
                                Active Email<br>
                                Active Address
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-6">
                        <button class="btn-use">Use</button>
                        <div class="edit-link hover:text-[#ff4fa1]">
                            <img src="edit.png" alt="Edit" class="w-6 h-6 object-contain">
                            <span>Edit</span>
                        </div>
                    </div>
                </div>
            </section>
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
                <li><a href="#" class="text-lg underline decoration-2">Commission</a></li>
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
            <div class="space-y-4 font-semibold text-black">
                <div class="flex items-center gap-4 text-lg">
                    <i class="fa-brands fa-instagram text-2xl"></i>
                    <span>@angelicasweetenz</span>
                </div>
                <div class="flex items-center gap-4 text-lg">
                    <i class="fa-brands fa-discord text-xl"></i>
                    <span>asweetenz</span>
                </div>
                <div class="flex items-center gap-4 text-lg">
                    <i class="fa-solid fa-envelope text-xl"></i>
                    <span class="text-base">angelica.sweetenz@gmail.com</span>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>