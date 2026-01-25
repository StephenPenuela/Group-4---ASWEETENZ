<?php 
include 'header.php'; 
if (!isLoggedIn()) header("Location: Login.php");

$uid = $_SESSION['user_id'];
$sql = "SELECT * FROM orders WHERE user_id = $uid AND status = 'To Pay' ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-4xl font-black text-gray-800 mb-8 flex items-center gap-3">
            <i class="fa-solid fa-wallet text-[#ff4fa1]"></i> To Pay
        </h1>

        <div class="space-y-6">
            <?php if ($result->num_rows > 0): ?>
                <?php while($order = $result->fetch_assoc()): ?>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border-l-8 border-[#ff4fa1] hover:shadow-md transition">
                        <div class="flex flex-col md:flex-row justify-between md:items-center gap-4 mb-4">
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase tracking-wide">Order ID: #<?php echo str_pad($order['order_id'], 6, '0', STR_PAD_LEFT); ?></p>
                                <p class="text-sm text-gray-500"><?php echo date('F j, Y', strtotime($order['created_at'])); ?></p>
                            </div>
                            <span class="bg-orange-100 text-orange-600 px-4 py-1 rounded-full font-bold text-sm w-fit">Pending Payment</span>
                        </div>
                        
                        <div class="flex justify-between items-end border-t border-gray-100 pt-4">
                            <div>
                                <p class="text-gray-500 font-bold text-sm">Total Amount</p>
                                <p class="text-2xl font-black text-[#ff4fa1]">₱ <?php echo number_format($order['total_amount'], 2); ?></p>
                            </div>
                            <button class="bg-[#ff4fa1] text-white px-8 py-2 rounded-full font-bold hover:bg-[#e03e8a] transition shadow-md">
                                Pay Now
                            </button>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="text-center py-20 text-gray-400">
                    <i class="fa-regular fa-folder-open text-6xl mb-4"></i>
                    <p class="font-bold text-xl">No pending payments.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>