<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz - Write a Review</title>
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

        /* Media Upload Box */
        .upload-box {
            border: 3px solid #000000;
            border-radius: 15px;
            height: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .review-container {
            background-color: #d9d9d9;
            border-radius: 10px;
            padding: 20px;
            margin-top: 30px;
        }

        /* Interactive Stars */
        .star-rating i {
            cursor: pointer;
            transition: color 0.2s, transform 0.1s;
        }

        .star-rating i:active {
            transform: scale(1.2);
        }

        .star-gold {
            color: #facc15;
        }

        .star-gray {
            color: #d1d5db;
        }

        /* Toggle Switch */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #ff4fa1;
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }

        .btn-submit {
            background-color: #ff4fa1;
            color: white;
            font-size: 2.5rem;
            font-weight: 800;
            padding: 10px 80px;
            border-radius: 15px;
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
            <a href="#" class="no-underline">About</a>
        </nav>
        <div class="flex items-center gap-x-4 ml-auto z-10 mt-[-20px]">
            <img src="user.png" alt="User" class="h-[42px] brightness-0 invert cursor-pointer">
            <img src="search.png" alt="Search" class="h-[32px] brightness-0 invert cursor-pointer">
            <img src="cart2.png" alt="Cart" class="h-[42px] brightness-0 invert cursor-pointer">
        </div>
    </header>

    <main class="max-w-4xl mx-auto py-12 px-6">
        <div class="flex items-center gap-6 mb-8">
            <img src="commission1.png" alt="Product" class="w-24 h-24 object-contain">
            <h2 class="text-3xl font-black">Sticker 12</h2>
        </div>

        <hr class="border-t-4 border-[#ff4fa1] mb-10">

        <div class="grid grid-cols-2 gap-8 mb-8">
            <div class="upload-box"><i class="fa-solid fa-plus text-4xl mb-2"></i><span class="pink-text font-bold">Add Photo</span></div>
            <div class="upload-box"><i class="fa-solid fa-plus text-4xl mb-2"></i><span class="pink-text font-bold">Add Video</span></div>
        </div>

        <div class="review-container">
            <div class="space-y-4 mb-6">
                <div class="flex items-center gap-4">
                    <span class="font-bold w-32">Quality:</span>
                    <div class="star-rating flex gap-1 text-2xl" data-category="quality">
                        <i class="fa-solid fa-star star-gray" data-value="1"></i>
                        <i class="fa-solid fa-star star-gray" data-value="2"></i>
                        <i class="fa-solid fa-star star-gray" data-value="3"></i>
                        <i class="fa-solid fa-star star-gray" data-value="4"></i>
                        <i class="fa-solid fa-star star-gray" data-value="5"></i>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <span class="font-bold w-32">Texture:</span>
                    <div class="star-rating flex gap-1 text-2xl" data-category="texture">
                        <i class="fa-solid fa-star star-gray" data-value="1"></i>
                        <i class="fa-solid fa-star star-gray" data-value="2"></i>
                        <i class="fa-solid fa-star star-gray" data-value="3"></i>
                        <i class="fa-solid fa-star star-gray" data-value="4"></i>
                        <i class="fa-solid fa-star star-gray" data-value="5"></i>
                    </div>
                </div>
            </div>
            <hr class="border-gray-400 mb-6">
            <textarea placeholder="Share more thoughts on the product to help other buyers." class="w-full bg-transparent italic h-24 outline-none resize-none"></textarea>
        </div>

        <div class="flex items-center justify-between mt-12 mb-16">
            <div>
                <h3 class="text-2xl font-black">Leave your review anonymously</h3>
                <p class="text-gray-600 italic">Your username will be shown as "S*(*#S@#*"</p>
            </div>
            <label class="switch"><input type="checkbox" checked><span class="slider"></span></label>
        </div>

        <div class="space-y-8 mb-20 max-w-xl mx-auto">
            <div class="flex items-center justify-between">
                <span class="text-2xl font-black uppercase">Seller Service</span>
                <div class="star-rating flex gap-2 text-3xl" data-category="seller">
                    <i class="fa-solid fa-star star-gray" data-value="1"></i>
                    <i class="fa-solid fa-star star-gray" data-value="2"></i>
                    <i class="fa-solid fa-star star-gray" data-value="3"></i>
                    <i class="fa-solid fa-star star-gray" data-value="4"></i>
                    <i class="fa-solid fa-star star-gray" data-value="5"></i>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-2xl font-black uppercase">Delivery Speed</span>
                <div class="star-rating flex gap-2 text-3xl" data-category="delivery">
                    <i class="fa-solid fa-star star-gray" data-value="1"></i>
                    <i class="fa-solid fa-star star-gray" data-value="2"></i>
                    <i class="fa-solid fa-star star-gray" data-value="3"></i>
                    <i class="fa-solid fa-star star-gray" data-value="4"></i>
                    <i class="fa-solid fa-star star-gray" data-value="5"></i>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-2xl font-black uppercase">Driver Service</span>
                <div class="star-rating flex gap-2 text-3xl" data-category="driver">
                    <i class="fa-solid fa-star star-gray" data-value="1"></i>
                    <i class="fa-solid fa-star star-gray" data-value="2"></i>
                    <i class="fa-solid fa-star star-gray" data-value="3"></i>
                    <i class="fa-solid fa-star star-gray" data-value="4"></i>
                    <i class="fa-solid fa-star star-gray" data-value="5"></i>
                </div>
            </div>
        </div>

        <div class="text-center mb-12">
            <button class="btn-submit uppercase">Submit</button>
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
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">Home</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">Shop All</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">Collections</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">About</a></li>
            </ul>
        </div>

        <div class="flex-1 px-8 min-w-[150px] border-l-2 border-[#ff4fa1]">
            <h4 class="mt-0 mb-6 text-2xl font-bold uppercase">Support</h4>
            <ul class="list-none p-0 space-y-2">
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">Refund Policy</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">FAQs</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">Privacy Policy</a></li>
                <li><a href="#" class="text-lg font-bold underline decoration-2 no-underline">Terms of Use</a></li>
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

    <script>
        const ratingContainers = document.querySelectorAll('.star-rating');
        ratingContainers.forEach(container => {
            const stars = container.querySelectorAll('i');
            stars.forEach(star => {
                star.addEventListener('click', () => {
                    const value = parseInt(star.getAttribute('data-value'));
                    stars.forEach(s => {
                        s.classList.remove('star-gold');
                        s.classList.add('star-gray');
                    });
                    for (let i = 0; i < value; i++) {
                        stars[i].classList.remove('star-gray');
                        stars[i].classList.add('star-gold');
                    }
                });
            });
        });
    </script>
</body>

</html>