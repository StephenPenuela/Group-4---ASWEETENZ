<?php include 'header.php'; ?>

<main class="main-bg-pattern py-16 px-[5%]">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h1 class="text-[#ff4fa1] text-6xl font-black uppercase mb-4">Commissions</h1>
            <p class="text-gray-500 text-xl font-bold max-w-2xl mx-auto">
                Want something unique? We create custom digital art and stickers just for you!
            </p>
        </div>

        <div class="bg-white p-4 rounded-[40px] shadow-sm border border-pink-50 mb-16">
            <div class="w-full h-[400px] md:h-[500px] rounded-[30px] overflow-hidden relative group">
                <img src="Commision_Home.webp" alt="Commission Art" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/30 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                    <a href="mailto:angelica.sweetenz@gmail.com" class="bg-white text-[#ff4fa1] px-10 py-4 rounded-full font-black text-xl hover:scale-105 transition">Request Quote</a>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-3xl shadow-sm text-center border-t-8 border-[#ff4fa1]">
                <i class="fa-solid fa-palette text-5xl text-gray-200 mb-6"></i>
                <h3 class="text-2xl font-black text-gray-800 mb-2">Digital Art</h3>
                <p class="text-gray-500">Custom illustrations for your profile picture, banner, or brand.</p>
            </div>
            
            <div class="bg-white p-8 rounded-3xl shadow-sm text-center border-t-8 border-[#ff4fa1]">
                <i class="fa-solid fa-note-sticky text-5xl text-gray-200 mb-6"></i>
                <h3 class="text-2xl font-black text-gray-800 mb-2">Custom Stickers</h3>
                <p class="text-gray-500">We print and cut stickers based on your own designs.</p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm text-center border-t-8 border-[#ff4fa1]">
                <i class="fa-solid fa-bag-shopping text-5xl text-gray-200 mb-6"></i>
                <h3 class="text-2xl font-black text-gray-800 mb-2">Bulk Orders</h3>
                <p class="text-gray-500">Special pricing for events, parties, and weddings.</p>
            </div>
        </div>
        
        <div class="text-center mt-16">
            <a href="mailto:angelica.sweetenz@gmail.com" class="inline-flex items-center gap-3 bg-[#ff4fa1] text-white px-12 py-4 rounded-full font-bold text-xl hover:bg-[#e03e8a] transition shadow-lg">
                <i class="fa-regular fa-envelope"></i> Email Us for Rates
            </a>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>