<?php 
include 'header.php'; 
if (!isLoggedIn()) header("Location: Login.php");

$uid = $_SESSION['user_id'];
$sql = "SELECT * FROM orders WHERE user_id = $uid AND status = 'To Ship' ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-4xl font-black text-gray-800 mb-8 flex items-center gap-3">
            <i class="fa-solid fa-box-open text-[#ff4fa1]"></i> To Ship
        </h1>

        <div class="space-y-6">
            <?php if ($result->num_rows > 0): ?>
                <?php while($order = $result->fetch_assoc()): ?>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border-l-8 border-blue-400 hover:shadow-md transition">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <p class="text-xs font-bold text-gray-400 uppercase">Order ID: #<?php echo str_pad($order['order_id'], 6, '0', STR_PAD_LEFT); ?></p>
                                <p class="font-bold text-gray-700">Preparing your items...</p>
                            </div>
                            <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full font-bold text-sm">Processing</span>
                        </div>
                        <div class="border-t border-gray-100 pt-4 mt-2">
                             <p class="text-right text-xl font-black text-gray-800">₱ <?php echo number_format($order['total_amount'], 2); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="text-center py-20 text-gray-400">
                    <p class="font-bold text-xl">No orders to ship.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>