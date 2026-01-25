<?php include 'header.php'; ?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">

    <div class="max-w-6xl mx-auto">
        <h1 class="text-[#ff4fa1] text-6xl font-black mb-16 text-center">Collections</h1>

        <div class="space-y-8">
            <div class="bg-white rounded-[30px] p-8 md:p-12 shadow-sm border border-pink-50 hover:shadow-lg transition flex flex-col md:flex-row items-center gap-8 md:gap-16 group">
                <div class="w-48 h-48 bg-pink-50 rounded-full flex-shrink-0 flex items-center justify-center group-hover:scale-110 transition duration-500">
                    <img src="sticker_collection.png" alt="Stickers" class="w-32">
                </div>
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-4xl md:text-5xl font-black text-gray-800 mb-2">Stickers</h2>
                    <p class="text-[#ff4fa1] text-2xl font-bold">Die-cut, Sheets, and more!</p>
                </div>
                <a href="Product_List.php?cat=Stickers" class="bg-[#ff4fa1] text-white text-xl font-bold px-10 py-4 rounded-full shadow-lg hover:bg-[#e03e8a] transition transform hover:scale-105">
                    View
                </a>
            </div>

            <div class="bg-white rounded-[30px] p-8 md:p-12 shadow-sm border border-pink-50 hover:shadow-lg transition flex flex-col md:flex-row items-center gap-8 md:gap-16 group">
                <div class="w-48 h-48 bg-pink-50 rounded-full flex-shrink-0 flex items-center justify-center group-hover:scale-110 transition duration-500">
                    <img src="charms_collection.png" alt="Charms" class="w-32">
                </div>
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-4xl md:text-5xl font-black text-gray-800 mb-2">Charms</h2>
                    <p class="text-[#ff4fa1] text-2xl font-bold">Acrylic & Resin Charms</p>
                </div>
                <a href="Product_List.php?cat=Charms" class="bg-[#ff4fa1] text-white text-xl font-bold px-10 py-4 rounded-full shadow-lg hover:bg-[#e03e8a] transition transform hover:scale-105">
                    View
                </a>
            </div>

            <div class="bg-white rounded-[30px] p-8 md:p-12 shadow-sm border border-pink-50 hover:shadow-lg transition flex flex-col md:flex-row items-center gap-8 md:gap-16 group">
                <div class="w-48 h-48 bg-pink-50 rounded-full flex-shrink-0 flex items-center justify-center group-hover:scale-110 transition duration-500">
                    <img src="keychain_collection.png" alt="Keychains" class="w-32">
                </div>
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-4xl md:text-5xl font-black text-gray-800 mb-2">Keychains</h2>
                    <p class="text-[#ff4fa1] text-2xl font-bold">Cute companions for your keys</p>
                </div>
                <a href="Product_List.php?cat=Keychains" class="bg-[#ff4fa1] text-white text-xl font-bold px-10 py-4 rounded-full shadow-lg hover:bg-[#e03e8a] transition transform hover:scale-105">
                    View
                </a>
            </div>
        </div>
    </div>

</main>

<?php include 'footer.php'; ?>