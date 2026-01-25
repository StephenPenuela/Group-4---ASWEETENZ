<?php include 'header.php'; ?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-[#ff4fa1] text-4xl font-black uppercase">My Addresses</h1>
            <a href="Edit&Add_Address.php" class="bg-[#ff4fa1] text-white px-6 py-2 rounded-full font-bold hover:bg-[#e03e8a] transition shadow-md">
                <i class="fa-solid fa-plus mr-2"></i> Add New
            </a>
        </div>

        <div class="space-y-4">
            <div class="bg-white p-6 rounded-2xl border-2 border-[#ff4fa1] shadow-sm flex justify-between items-center relative overflow-hidden">
                <div class="absolute top-0 right-0 bg-[#ff4fa1] text-white text-xs font-bold px-3 py-1 rounded-bl-xl">DEFAULT</div>
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Home</h3>
                    <p class="text-gray-600 font-medium">123 Sweet Street, Candy Village</p>
                    <p class="text-gray-500 text-sm">Metro Manila, Philippines 1000</p>
                    <p class="text-gray-500 text-sm mt-1">0912 345 6789</p>
                </div>
                <div class="flex gap-3">
                    <a href="#" class="text-gray-400 hover:text-[#ff4fa1]"><i class="fa-solid fa-pen-to-square text-xl"></i></a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex justify-between items-center hover:border-pink-200 transition">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Office</h3>
                    <p class="text-gray-600 font-medium">456 Work Avenue, Business District</p>
                    <p class="text-gray-500 text-sm">Makati City, Philippines 1200</p>
                    <p class="text-gray-500 text-sm mt-1">0998 765 4321</p>
                </div>
                <div class="flex gap-3">
                    <a href="#" class="text-gray-400 hover:text-[#ff4fa1]"><i class="fa-solid fa-pen-to-square text-xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-red-500"><i class="fa-solid fa-trash text-xl"></i></a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>