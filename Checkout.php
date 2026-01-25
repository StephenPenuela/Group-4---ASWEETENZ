    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ASweetenz - Order Details</title>
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

            .option-box {
                border: 2px solid #d1d5db;
                border-radius: 12px;
                padding: 16px 24px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 12px;
                cursor: pointer;
                transition: border-color 0.2s;
            }

            .option-box:hover {
                border-color: #ff4fa1;
            }

            .radio-circle {
                width: 24px;
                height: 24px;
                border: 2px solid #d1d5db;
                border-radius: 50%;
            }

            .section-divider {
                border-top: 8px solid #f3f4f6;
                margin: 32px 0;
            }

            .btn-place-order {
                background-color: #ff4fa1;
                color: white;
                font-weight: 800;
                padding: 12px 60px;
                border-radius: 15px;
                font-size: 2.5rem;
                display: inline-block;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .suggestion-card {
                background-color: #fbfcf8;
                border-radius: 15px;
                padding: 12px;
                text-align: center;
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

        <main class="main-bg-pattern py-10 px-[10%] min-h-screen">

            <div class="flex items-center gap-4 mb-8">
                <a href="cart.html" class="text-4xl text-gray-600"><i class="fa-solid fa-arrow-left-long"></i></a>
                <h1 class="text-[#ff4fa1] text-5xl font-black mx-auto uppercase">Order Details</h1>
            </div>

            <div class="bg-white border-2 border-gray-200 rounded-2xl p-6 flex items-center gap-6 mb-10 cursor-pointer hover:border-[#ff4fa1]">
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="location.png" alt="Location" class="max-w-full max-h-full object-contain">
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl font-black">Username</h3>
                    <p class="text-gray-500 font-bold">Contact Number | Active Email | Active Address</p>
                </div>
                <div class="text-3xl text-gray-400"><i class="fa-solid fa-chevron-right"></i></div>
            </div>

            <div class="section-divider"></div>

            <div class="mb-10">
                <h2 class="text-2xl font-black mb-6">Selected Items:</h2>
                <div class="flex items-center gap-8">
                    <img src="item_checkout.png" alt="Product" class="w-40 h-40 object-contain">
                    <div class="flex-1">
                        <h3 class="text-2xl font-black">Item name</h3>
                        <p class="text-gray-500 font-bold">Item Description</p>
                        <div class="flex items-center gap-1 text-yellow-400 my-1">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <span class="text-gray-400 text-sm ml-2 uppercase">10 Sold</span>
                        </div>
                        <p class="text-[#ff4fa1] text-2xl font-black italic">100.00 PHP</p>
                    </div>
                    <div class="text-right font-bold text-lg space-y-1">
                        <p>Quantity: 1</p>
                        <p>Subtotal:</p>
                        <p>Commission (10%):</p>
                    </div>
                </div>
            </div>

            <div class="section-divider"></div>

            <div class="mb-10">
                <h2 class="text-2xl font-black mb-4">Order Summary:</h2>
                <div class="space-y-2 text-lg font-bold text-gray-700">
                    <p>Selected Items:</p>
                    <p>Delivery Address:</p>
                    <br>
                    <p>Subtotal:</p>
                    <p>Commission (10%):</p>
                    <p>Shipping Fee:</p>
                </div>
                <div class="flex justify-between items-center mt-6 border-t pt-4">
                    <span class="text-3xl font-black">Total:</span>
                    <span class="text-[#ff4fa1] text-3xl font-black italic">110.00</span>
                </div>
            </div>

            <div class="section-divider"></div>

            <div class="mb-10">
                <h2 class="text-2xl font-black mb-6">Mode of Payment:</h2>
                <div class="space-y-3">
                    <div class="option-box border-[#ff4fa1]">
                        <div>
                            <p class="font-black text-lg uppercase">Cash on Delivery (Default)</p>
                            <p class="text-gray-400 text-sm">Pay when you receive</p>
                        </div>
                        <div class="radio-circle border-[#ff4fa1] bg-[#ff4fa1] flex items-center justify-center">
                            <div class="w-2 h-2 bg-white rounded-full"></div>
                        </div>
                    </div>
                    <div class="option-box">
                        <div>
                            <p class="font-black text-lg uppercase">GCash (If Applicable)</p>
                            <p class="text-gray-400 text-sm">Online Payment</p>
                        </div>
                        <div class="radio-circle"></div>
                    </div>
                </div>
            </div>

            <div class="section-divider"></div>

            <div class="mb-10">
                <h2 class="text-2xl font-black mb-6">Shipping Option:</h2>
                <div class="space-y-3">
                    <div class="option-box">
                        <div>
                            <p class="font-black text-lg uppercase">Same-Day Delivery</p>
                            <p class="text-gray-400 text-sm">Lalamove, Grab, Angkas Padala</p>
                        </div>
                        <div class="radio-circle"></div>
                    </div>
                    <div class="option-box">
                        <div>
                            <p class="font-black text-lg uppercase">Self Pick-Up</p>
                            <p class="text-gray-400 text-sm">Store Pick-up</p>
                        </div>
                        <div class="radio-circle"></div>
                    </div>
                </div>
            </div>

            <div class="section-divider"></div>

            <div class="mb-20">
                <h2 class="text-2xl font-black text-center mb-8">You might also like</h2>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                    <div class="suggestion-card shadow-sm">
                        <img src="suggest1.png" alt="Item" class="w-full aspect-square object-contain mb-2">
                        <p class="font-black text-sm">Item name</p>
                        <p class="text-gray-400 text-xs">Item Description</p>
                        <div class="text-yellow-400 text-[10px] my-1"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <p class="text-[#ff4fa1] font-black text-sm">100 PHP</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center gap-6 border-t-2 pt-10">
                <div class="flex justify-between w-full max-w-4xl text-3xl font-black">
                    <span>Total:</span>
                    <span>₱ 110.00</span>
                </div>
                <button class="btn-place-order italic transform transition hover:scale-105 active:scale-95">
                    Place Order
                </button>
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
                <div class="space-y-4 text-black">
                    <div class="flex items-center gap-4 text-lg font-bold"><i class="fa-brands fa-instagram text-2xl"></i><span>@angelicasweetenz</span></div>
                    <div class="flex items-center gap-4 text-lg font-bold"><i class="fa-brands fa-discord text-xl"></i><span>asweetenz</span></div>
                    <div class="flex items-center gap-4 text-lg font-bold"><i class="fa-solid fa-envelope text-xl"></i><span class="text-base">angelica.sweetenz@gmail.com</span></div>
                </div>
            </div>
        </footer>

    </body>

    </html>