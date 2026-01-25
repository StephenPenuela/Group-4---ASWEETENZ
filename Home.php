<?php include 'header.php'; ?>

<section class="relative w-full h-[600px] bg-gray-100 overflow-hidden">
    <div class="absolute inset-0">
        <img src="Hero_Home.webp" alt="Home Hero" class="w-full h-full object-cover object-center animate-fade-in">
        <div class="absolute inset-0 bg-black/20"></div> </div>
    
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
        <h1 class="text-white text-5xl md:text-7xl font-black drop-shadow-lg mb-6 tracking-wide">
            WELCOME TO <br><span class="text-[#ff4fa1] bg-white px-4 rounded-xl">ASWEETENZ</span>
        </h1>
        <p class="text-white text-xl md:text-2xl font-bold mb-8 drop-shadow-md max-w-2xl">
            Discover the cutest stickers, charms, and art accessories tailored just for you.
        </p>
        <a href="Product_List.php" class="bg-[#ff4fa1] hover:bg-[#e03e8a] text-white text-xl md:text-2xl font-bold py-4 px-12 rounded-full shadow-xl transform hover:scale-105 transition duration-300 flex items-center gap-3">
            Shop Now <i class="fa-solid fa-bag-shopping"></i>
        </a>
    </div>
</section>

<main class="main-bg-pattern py-20 px-[5%]">

    <div class="text-center mb-16">
        <h2 class="text-5xl font-bold text-[#ff4fa1] uppercase inline-block border-b-4 border-pink-200 pb-2">Featured Items</h2>
        <p class="text-gray-400 font-bold mt-4 text-lg">Check out our latest arrivals!</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 max-w-7xl mx-auto">
        <?php
        // Fetch 4 items. If database is empty or fails, this won't crash the site.
        $sql = "SELECT * FROM products LIMIT 4";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
                <a href="Product_Detail.php?id=<?php echo $row['product_id']; ?>" class="group block">
                    <div class="bg-white p-4 rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-300 border border-transparent hover:border-pink-200 h-full flex flex-col">
                        <div class="aspect-square bg-gray-50 rounded-2xl mb-4 overflow-hidden relative">
                            <img src="<?php echo $row['image_url']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <span class="absolute top-3 left-3 bg-[#ff4fa1] text-white text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider">New</span>
                        </div>
                        <h3 class="text-xl font-black text-gray-800 mb-1 group-hover:text-[#ff4fa1] transition"><?php echo $row['name']; ?></h3>
                        <div class="mt-auto pt-2 flex justify-between items-center">
                            <p class="text-[#ff4fa1] text-xl font-bold">₱ <?php echo $row['price']; ?></p>
                            <span class="w-8 h-8 rounded-full bg-pink-50 flex items-center justify-center text-[#ff4fa1] group-hover:bg-[#ff4fa1] group-hover:text-white transition"><i class="fa-solid fa-plus"></i></span>
                        </div>
                    </div>
                </a>
        <?php
            }
        } else {
            echo "<p class='text-center col-span-4 text-gray-400 text-xl'>No products found yet! Add some in Admin Panel.</p>";
        }
        ?>
    </div>

    <div class="text-center mt-16">
        <a href="Product_List.php" class="inline-block border-2 border-[#ff4fa1] text-[#ff4fa1] hover:bg-[#ff4fa1] hover:text-white text-xl font-bold py-3 px-12 rounded-full transition duration-300 uppercase tracking-widest">
            View All Products
        </a>
    </div>

</main>

<?php include 'footer.php'; ?>