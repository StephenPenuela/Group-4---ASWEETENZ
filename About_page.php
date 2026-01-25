<?php include 'header.php'; ?>

<div class="relative w-full h-[300px] flex items-center justify-center bg-gray-100 overflow-hidden">
    <div class="absolute inset-0 bg-[url('banner.png')] bg-cover bg-center opacity-50"></div>
    <h1 class="relative z-10 text-[#ff4fa1] text-6xl md:text-8xl font-black drop-shadow-sm uppercase tracking-tighter">About Us</h1>
</div>

<main class="main-bg-pattern py-20 px-[5%]">
    <div class="max-w-6xl mx-auto space-y-24">

        <div class="flex flex-col md:flex-row items-center gap-12 bg-white p-8 rounded-[40px] shadow-sm">
            <div class="w-full md:w-1/2 aspect-square bg-gray-200 rounded-3xl overflow-hidden shadow-inner">
                <img src="Owner_about_page.webp" alt="Marian Marzalado" class="w-full h-full object-cover">
            </div>
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h2 class="text-5xl font-black text-gray-800 mb-2">Marian Marzalado</h2>
                <h3 class="text-[#ff4fa1] text-3xl font-bold mb-6">CEO, ASweetenz</h3>
                <p class="text-gray-600 text-xl leading-relaxed font-medium">
                    "ASweetenz started as a small dream to share my love for art and cuteness with the world. Every sticker, charm, and tote bag is designed with the hope of brightening someone's day."
                </p>
            </div>
        </div>

        <div class="w-full h-1 bg-[#ffcae1] rounded-full"></div>

        <div class="flex flex-col md:flex-row-reverse items-center gap-12">
            <div class="w-full md:w-1/2">
                <img src="Design_About_page.webp" alt="Design Process" class="w-full rounded-3xl shadow-lg border-4 border-white">
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-5xl font-black text-[#ff4fa1] mb-6">Our Mission</h2>
                <p class="text-gray-600 text-xl leading-relaxed font-medium mb-6">
                    We believe in the power of small things. A cute sticker on a laptop, a charm on a bag—these are little expressions of joy and personality.
                </p>
                <p class="text-gray-600 text-xl leading-relaxed font-medium">
                    Our goal is to provide high-quality, locally designed merchandise that connects with the vibrant art community in the Philippines and beyond.
                </p>
            </div>
        </div>

    </div>
</main>

<?php include 'footer.php'; ?>