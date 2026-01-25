<?php 
include 'header.php'; 
if (!isLoggedIn()) header("Location: Login.php");

$uid = $_SESSION['user_id'];
$sql = "SELECT * FROM orders WHERE user_id = $uid AND status = 'To Receive' ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-4xl font-black text-gray-800 mb-8 flex items-center gap-3">
            <i class="fa-solid fa-truck-fast text-[#ff4fa1]"></i> To Receive
        </h1>

        <div class="space-y-6">
            <?php if ($result->num_rows > 0): ?>
                <?php while($order = $result->fetch_assoc()): ?>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border-l-8 border-green-400 hover:shadow-md transition">
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase">Order ID: #<?php echo str_pad($order['order_id'], 6, '0', STR_PAD_LEFT); ?></p>
                                <p class="text-green-600 font-bold"><i class="fa-solid fa-truck"></i> Out for Delivery</p>
                            </div>
                            <a href="Track_Order.php?id=<?php echo $order['order_id']; ?>" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2 rounded-lg font-bold text-sm transition">
                                Track Order
                            </a>
                        </div>
                        <div class="flex justify-between items-end border-t border-gray-100 pt-4">
                            <p class="text-sm text-gray-500">Estimated Delivery: 2-3 Days</p>
                            <button class="bg-[#ff4fa1] text-white px-6 py-2 rounded-full font-bold hover:bg-[#e03e8a] transition shadow-md">
                                Order Received
                            </button>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="text-center py-20 text-gray-400">
                    <p class="font-bold text-xl">No orders currently shipping.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>