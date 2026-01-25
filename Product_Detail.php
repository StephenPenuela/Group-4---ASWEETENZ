<?php 
include 'header.php'; 

// Get Product ID from URL, default to 1 if missing
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$product = null;

// Fetch Product Data
if ($product_id > 0) {
    $sql = "SELECT * FROM products WHERE product_id = $product_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    }
}

// Handle Add to Cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    if (!isLoggedIn()) {
        echo "<script>alert('Please login first!'); window.location.href='Login.php';</script>";
    } else {
        $user_id = $_SESSION['user_id'];
        $qty = intval($_POST['quantity']);
        $pid = intval($_POST['product_id']);
        
        // Check if item already in cart
        $check = $conn->query("SELECT * FROM cart WHERE user_id=$user_id AND product_id=$pid");
        if($check->num_rows > 0) {
            $conn->query("UPDATE cart SET quantity = quantity + $qty WHERE user_id=$user_id AND product_id=$pid");
        } else {
            $conn->query("INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $pid, $qty)");
        }
        
        echo "<script>alert('Added to Cart!'); window.location.href='Cart.php';</script>";
    }
}
?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">
    <div class="max-w-6xl mx-auto">
        <a href="javascript:history.back()" class="inline-flex items-center gap-2 text-gray-500 hover:text-[#ff4fa1] font-bold mb-8 transition">
            <i class="fa-solid fa-arrow-left"></i> Back to Shop
        </a>

        <?php if ($product): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 bg-white p-8 rounded-[40px] shadow-sm border border-pink-50">
            
            <div class="bg-gray-50 rounded-3xl p-8 flex items-center justify-center border-4 border-[#7a3a1a]">
                <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>" class="max-h-[500px] object-contain drop-shadow-xl hover:scale-105 transition duration-500">
            </div>

            <div class="flex flex-col justify-center">
                <h1 class="text-5xl font-black text-gray-800 mb-4"><?php echo $product['name']; ?></h1>
                
                <div class="flex items-center gap-4 mb-6">
                    <p class="text-4xl text-[#ff4fa1] font-black">₱ <?php echo number_format($product['price'], 2); ?></p>
                    <span class="bg-green-100 text-green-600 px-4 py-1 rounded-full font-bold text-sm">
                        <?php echo $product['stock'] > 0 ? 'In Stock' : 'Out of Stock'; ?>
                    </span>
                </div>

                <div class="mb-8">
                    <h3 class="text-gray-400 font-bold uppercase text-sm mb-2">Description</h3>
                    <p class="text-gray-600 text-lg leading-relaxed font-medium">
                        <?php echo $product['description']; ?>
                    </p>
                </div>

                <form method="POST" class="mt-auto">
                    <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                    
                    <div class="flex flex-col sm:flex-row gap-6">
                        <div class="flex items-center gap-4 bg-gray-100 px-6 py-3 rounded-full w-fit">
                            <button type="button" onclick="decrement()" class="text-gray-500 hover:text-[#ff4fa1] font-black text-xl">-</button>
                            <input type="number" name="quantity" id="qty" value="1" min="1" max="<?php echo $product['stock']; ?>" class="w-12 bg-transparent text-center font-bold text-xl outline-none">
                            <button type="button" onclick="increment()" class="text-gray-500 hover:text-[#ff4fa1] font-black text-xl">+</button>
                        </div>

                        <button type="submit" name="add_to_cart" <?php echo $product['stock'] < 1 ? 'disabled' : ''; ?> 
                                class="flex-1 bg-[#ff4fa1] text-white text-xl font-bold py-4 px-8 rounded-full shadow-lg hover:bg-[#e03e8a] transition transform hover:scale-105 disabled:bg-gray-300 disabled:cursor-not-allowed">
                            <?php echo $product['stock'] > 0 ? 'Add to Cart' : 'Sold Out'; ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <?php else: ?>
            <div class="text-center py-20">
                <h1 class="text-4xl font-bold text-gray-400">Product Not Found</h1>
                <a href="Product_List.php" class="text-[#ff4fa1] font-bold underline mt-4 block">Return to Shop</a>
            </div>
        <?php endif; ?>
    </div>
</main>

<script>
    function increment() {
        let input = document.getElementById('qty');
        input.value = parseInt(input.value) + 1;
    }
    function decrement() {
        let input = document.getElementById('qty');
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
    }
</script>

<?php include 'footer.php'; ?>