<?php 
include 'header.php'; 

if (!isLoggedIn()) {
    echo "<script>window.location.href='Login.php';</script>";
    exit();
}

$user_id = $_SESSION['user_id'];

// Handle Remove Item
if (isset($_GET['remove'])) {
    $cart_id = intval($_GET['remove']);
    $conn->query("DELETE FROM cart WHERE cart_id=$cart_id AND user_id=$user_id");
}

// Fetch Cart Items
$sql = "SELECT c.cart_id, c.quantity, p.name, p.price, p.image_url, p.category 
        FROM cart c 
        JOIN products p ON c.product_id = p.product_id 
        WHERE c.user_id = $user_id";
$result = $conn->query($sql);
$total_price = 0;
?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-[#ff4fa1] text-5xl font-black mb-10 flex items-center gap-4">
            <i class="fa-solid fa-cart-shopping"></i> My Cart
        </h1>

        <div class="bg-white rounded-[40px] shadow-sm border border-pink-50 overflow-hidden">
            <?php if ($result->num_rows > 0): ?>
                
                <div class="p-8 space-y-8">
                    <?php while($item = $result->fetch_assoc()): 
                        $subtotal = $item['price'] * $item['quantity'];
                        $total_price += $subtotal;
                    ?>
                    <div class="flex flex-col md:flex-row items-center gap-8 border-b border-gray-100 pb-8 last:border-0 last:pb-0">
                        <div class="w-32 h-32 bg-gray-50 rounded-2xl flex items-center justify-center p-2 flex-shrink-0">
                            <img src="<?php echo $item['image_url']; ?>" alt="Product" class="w-full h-full object-contain">
                        </div>

                        <div class="flex-1 text-center md:text-left">
                            <h3 class="text-2xl font-bold text-gray-800"><?php echo $item['name']; ?></h3>
                            <p class="text-gray-400 font-bold text-sm"><?php echo $item['category']; ?></p>
                            <p class="text-[#ff4fa1] font-black text-xl mt-1">₱ <?php echo number_format($item['price'], 2); ?></p>
                        </div>

                        <div class="flex items-center gap-8">
                            <div class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-xl">
                                <span class="text-gray-500 font-bold text-sm uppercase">Qty:</span>
                                <span class="font-black text-xl"><?php echo $item['quantity']; ?></span>
                            </div>
                            
                            <a href="Cart.php?remove=<?php echo $item['cart_id']; ?>" class="text-gray-300 hover:text-red-500 transition text-2xl" title="Remove Item">
                                <i class="fa-regular fa-trash-can"></i>
                            </a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>

                <div class="bg-[#fceef4] p-8 md:p-12 flex flex-col md:flex-row justify-between items-center gap-6">
                    <div>
                        <p class="text-gray-500 font-bold text-lg">Total Amount</p>
                        <p class="text-[#ff4fa1] text-5xl font-black">₱ <?php echo number_format($total_price, 2); ?></p>
                    </div>
                    <a href="Checkout.php" class="bg-[#ff4fa1] text-white text-2xl font-bold py-4 px-16 rounded-full shadow-lg hover:bg-[#e03e8a] transition transform hover:scale-105">
                        Check Out
                    </a>
                </div>

            <?php else: ?>
                <div class="text-center py-20 px-8">
                    <i class="fa-solid fa-basket-shopping text-6xl text-gray-200 mb-6"></i>
                    <h2 class="text-3xl font-bold text-gray-400 mb-4">Your cart is empty</h2>
                    <a href="Product_List.php" class="bg-[#ff4fa1] text-white px-8 py-3 rounded-full font-bold shadow-md hover:bg-[#e03e8a] transition">Start Shopping</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>