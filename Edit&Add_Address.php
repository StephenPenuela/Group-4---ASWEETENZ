<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Address Details</title>
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

        .detail-input {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #7a7a7a;
            border-radius: 4px;
            font-size: 1.1rem;
            outline: none;
            background-color: white;
            transition: border-color 0.2s;
        }

        .detail-input:focus {
            border-color: #ff4fa1;
            border-width: 2px;
        }

        /* Save Button styling */
        .btn-save {
            background-color: #ff007a;
            color: white;
            font-weight: 800;
            padding: 10px 45px;
            border-radius: 6px;
            font-size: 1.5rem;
            text-transform: uppercase;
            transition: transform 0.1s;
        }

        .btn-save:active {
            transform: scale(0.98);
        }

        /* Delete action styling */
        .delete-action {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #4a4a4a;
            font-size: 1.1rem;
            font-weight: 500;
            cursor: pointer;
            transition: color 0.2s;
        }

        .delete-action:hover {
            color: #ff4fa1;
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
                ADDRESS<br>DETAILS
            </h1>
        </div>
    </header>

    <main class="main-bg-pattern min-h-[700px] py-16 px-10">
        <div class="max-w-[800px] mx-auto">

            <form class="space-y-8">
                <div>
                    <label class="form-label">Region/City/District <span class="required-star">*</span></label>
                    <input type="text" class="detail-input">
                </div>

                <div>
                    <label class="form-label">Street/Building Name <span class="required-star">*</span></label>
                    <input type="text" class="detail-input">
                </div>

                <div>
                    <label class="form-label">Unit/Floor</label>
                    <input type="text" class="detail-input">
                </div>

                <div>
                    <label class="form-label">Recipient's Name <span class="required-star">*</span></label>
                    <input type="text" class="detail-input">
                </div>

                <div>
                    <label class="form-label">Contact Number <span class="required-star">*</span></label>
                    <input type="text" class="detail-input">
                </div>

                <div class="flex justify-between items-end pt-12">
                    <div class="delete-action">
                        <i class="fa-regular fa-trash-can text-2xl"></i>
                        <span>Delete Address</span>
                    </div>

                    <button type="submit" class="btn-save shadow-md">
                        Save
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