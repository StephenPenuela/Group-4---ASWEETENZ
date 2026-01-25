<?php 
include 'header.php'; 

if (!isLoggedIn()) header("Location: Login.php");

$user_id = $_SESSION['user_id'];

// Calculate Total from Cart
$sql = "SELECT SUM(p.price * c.quantity) as total 
        FROM cart c JOIN products p ON c.product_id = p.product_id 
        WHERE c.user_id = $user_id";
$total_res = $conn->query($sql);
$total_row = $total_res->fetch_assoc();
$total_amount = $total_row['total'] ? $total_row['total'] : 0;
$shipping_fee = 50.00; // Fixed shipping for now
$grand_total = $total_amount + $shipping_fee;

// Handle Place Order
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $payment = $_POST['payment_method'];
    $address = "Default Address"; // You can expand this with Address_Detail.php logic later
    
    // 1. Create Order
    $conn->query("INSERT INTO orders (user_id, total_amount, status, payment_method, shipping_address) VALUES ($user_id, $grand_total, 'To Pay', '$payment', '$address')");
    $order_id = $conn->insert_id;

    // 2. Move Items from Cart to Order_Items
    $cart_items = $conn->query("SELECT c.*, p.price FROM cart c JOIN products p ON c.product_id = p.product_id WHERE user_id = $user_id");
    while($row = $cart_items->fetch_assoc()) {
        $conn->query("INSERT INTO order_items (order_id, product_id, quantity, price_at_purchase) VALUES ($order_id, {$row['product_id']}, {$row['quantity']}, {$row['price']})");
    }

    // 3. Clear Cart
    $conn->query("DELETE FROM cart WHERE user_id = $user_id");

    // 4. Redirect
    echo "<script>window.location.href='Order_Success.php';</script>";
}
?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-[#ff4fa1] text-5xl font-black mb-8 text-center uppercase">Checkout</h1>

        <form method="POST" class="bg-white p-8 md:p-12 rounded-[40px] shadow-sm border border-pink-50 space-y-10">
            
            <div>
                <h2 class="text-2xl font-black text-gray-800 mb-4 flex items-center gap-3">
                    <i class="fa-solid fa-location-dot text-[#ff4fa1]"></i> Delivery Address
                </h2>
                <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#ff4fa1] cursor-pointer transition">
                    <p class="font-bold text-xl"><?php echo $_SESSION['username']; ?></p>
                    <p class="text-gray-500 font-medium mt-1">123 Sweet Street, Candy Village, Metro Manila</p>
                    <p class="text-sm text-[#ff4fa1] font-bold mt-2">Default</p>
                </div>
            </div>

            <hr class="border-gray-100">

            <div>
                <h2 class="text-2xl font-black text-gray-800 mb-4">Mode of Payment</h2>
                <div class="space-y-3">
                    <label class="flex items-center justify-between border-2 border-gray-200 p-4 rounded-xl cursor-pointer hover:border-[#ff4fa1] has-[:checked]:border-[#ff4fa1] has-[:checked]:bg-pink-50 transition">
                        <div class="flex items-center gap-3">
                            <input type="radio" name="payment_method" value="COD" checked class="w-5 h-5 text-[#ff4fa1] focus:ring-[#ff4fa1]">
                            <span class="font-bold text-gray-700">Cash on Delivery (COD)</span>
                        </div>
                        <i class="fa-solid fa-money-bill-wave text-gray-400"></i>
                    </label>

                    <label class="flex items-center justify-between border-2 border-gray-200 p-4 rounded-xl cursor-pointer hover:border-[#ff4fa1] has-[:checked]:border-[#ff4fa1] has-[:checked]:bg-pink-50 transition">
                        <div class="flex items-center gap-3">
                            <input type="radio" name="payment_method" value="GCash" class="w-5 h-5 text-[#ff4fa1] focus:ring-[#ff4fa1]">
                            <span class="font-bold text-gray-700">GCash / E-Wallet</span>
                        </div>
                        <i class="fa-solid fa-mobile-screen text-gray-400"></i>
                    </label>
                </div>
            </div>

            <hr class="border-gray-100">

            <div class="bg-gray-50 rounded-2xl p-6 space-y-3">
                <div class="flex justify-between text-gray-600 font-bold">
                    <span>Merchandise Subtotal</span>
                    <span>₱ <?php echo number_format($total_amount, 2); ?></span>
                </div>
                <div class="flex justify-between text-gray-600 font-bold">
                    <span>Shipping Fee</span>
                    <span>₱ <?php echo number_format($shipping_fee, 2); ?></span>
                </div>
                <div class="flex justify-between text-[#ff4fa1] text-3xl font-black pt-4 border-t border-gray-200 mt-2">
                    <span>Total Payment</span>
                    <span>₱ <?php echo number_format($grand_total, 2); ?></span>
                </div>
            </div>

            <button type="submit" class="w-full bg-[#ff4fa1] text-white text-2xl font-bold py-5 rounded-full shadow-lg hover:bg-[#e03e8a] transition transform hover:scale-105 uppercase tracking-widest">
                Place Order
            </button>

        </form>
    </div>
</main>

<?php include 'footer.php'; ?>