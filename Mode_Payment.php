<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Mode of Payment</title>
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
            background-image: radial-gradient(#e5e5e5 1px, transparent 1px);
            background-size: 20px 20px;
        }

        /* Form styling to match mockup */
        .form-label {
            display: block;
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .required-star {
            color: #ff4fa1;
            margin-left: 2px;
        }

        .payment-input {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #7a7a7a;
            border-radius: 4px;
            font-size: 1.1rem;
            outline: none;
            background-color: white;
            transition: border-color 0.2s;
        }

        .payment-input:focus {
            border-color: #ff4fa1;
            border-width: 2px;
        }

        /* Custom Checkbox for COD */
        .custom-checkbox {
            appearance: none;
            width: 24px;
            height: 24px;
            border: 2px solid #ff4fa1;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            background: white;
            flex-shrink: 0;
        }

        .custom-checkbox:checked::after {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: #ff4fa1;
            font-size: 14px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Save Button styling */
        .btn-save {
            background-color: #ff007a;
            color: white;
            font-weight: 800;
            padding: 10px 60px;
            border-radius: 8px;
            font-size: 1.8rem;
            text-transform: uppercase;
            box-shadow: 0 4px 10px rgba(255, 0, 122, 0.2);
            transition: transform 0.1s;
        }

        .btn-save:active {
            transform: scale(0.98);
        }

        .payment-option-btn {
            cursor: pointer;
            transition: transform 0.2s;
        }

        .payment-option-btn:hover {
            transform: scale(1.05);
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
                MODE OF<br>PAYMENT
            </h1>
        </div>
    </header>

    <main class="main-bg-pattern min-h-[700px] py-16 px-10">
        <div class="max-w-[800px] mx-auto">

            <h2 class="text-2xl font-bold mb-8">How would you like to pay</h2>

            <form class="space-y-10">
                <div class="flex items-center gap-8 mb-6">
                    <img src="gcash.png" alt="GCash" class="h-12 w-auto payment-option-btn">
                    <img src="paymaya.png" alt="PayMaya" class="h-10 w-auto payment-option-btn">
                </div>

                <div class="flex items-center gap-4">
                    <input type="checkbox" id="cod" class="custom-checkbox">
                    <label for="cod" class="text-xl font-medium cursor-pointer">Cash on Delivery</label>
                </div>

                <div>
                    <label class="form-label">Name <span class="required-star">*</span></label>
                    <input type="text" class="payment-input">
                </div>

                <div>
                    <label class="form-label">E-wallet Number</label>
                    <input type="text" class="payment-input">
                </div>

                <div class="flex justify-center pt-16">
                    <button type="submit" class="btn-save">
                        SAVE
                    </button>
                </div>
            </form>

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