<?php include 'header.php'; ?>

<main class="min-h-[600px] flex items-center justify-center px-4">
    <div class="text-center max-w-lg">
        <div class="w-32 h-32 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-8 animate-bounce">
            <i class="fa-solid fa-check text-6xl text-green-500"></i>
        </div>

        <h1 class="text-5xl font-black text-[#ff4fa1] mb-4">Thank You!</h1>
        <p class="text-2xl text-gray-600 font-bold mb-8">Your order has been placed successfully.</p>
        
        <p class="text-gray-500 mb-12 text-lg">
            We will notify you once your items are packed and ready to ship. 
            You can track your order status in your account.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="To_Pay.php" class="bg-[#ff4fa1] text-white px-8 py-3 rounded-full font-bold text-xl shadow-lg hover:bg-[#e03e8a] transition">
                View Order
            </a>
            <a href="Product_List.php" class="border-2 border-[#ff4fa1] text-[#ff4fa1] px-8 py-3 rounded-full font-bold text-xl hover:bg-pink-50 transition">
                Continue Shopping
            </a>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>