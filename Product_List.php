<?php include 'header.php'; ?>

<main class="main-bg-pattern min-h-screen py-12 px-[5%]">
    
    <div class="max-w-7xl mx-auto mb-12 flex flex-col md:flex-row justify-between items-center gap-6">
        <h1 class="text-[#ff4fa1] text-5xl font-black uppercase">Shop All</h1>
        
        <div class="flex gap-3 overflow-x-auto pb-2 w-full md:w-auto">
            <button class="px-6 py-2 rounded-full bg-[#ff4fa1] text-white font-bold shadow-md whitespace-nowrap">All</button>
            <button class="px-6 py-2 rounded-full bg-white text-gray-500 font-bold hover:text-[#ff4fa1] shadow-sm whitespace-nowrap transition">Stickers</button>
            <button class="px-6 py-2 rounded-full bg-white text-gray-500 font-bold hover:text-[#ff4fa1] shadow-sm whitespace-nowrap transition">Charms</button>
            <button class="px-6 py-2 rounded-full bg-white text-gray-500 font-bold hover:text-[#ff4fa1] shadow-sm whitespace-nowrap transition">Totebags</button>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
            <a href="Product_Detail.php?id=<?php echo $row['product_id']; ?>" class="group block">
                <div class="bg-white p-4 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-pink-200">
                    <div class="aspect-square bg-gray-50 rounded-2xl mb-4 overflow-hidden">
                        <img src="<?php echo $row['image_url']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1 group-hover:text-[#ff4fa1] transition truncate"><?php echo $row['name']; ?></h3>
                    <p class="text-gray-400 text-sm font-bold mb-3"><?php echo $row['category']; ?></p>
                    <div class="flex justify-between items-end">
                        <p class="text-[#ff4fa1] text-2xl font-black">₱ <?php echo $row['price']; ?></p>
                        <button class="bg-[#ff4fa1] text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#e03e8a] transition shadow-md">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </a>
        <?php
            }
        } else {
            echo "<div class='col-span-full text-center py-20 text-gray-400 text-2xl font-bold'>No items in the shop currently.</div>";
        }
        ?>
    </div>

</main>

<?php include 'footer.php'; ?>