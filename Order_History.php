<?php 
include 'header.php'; 
if (!isLoggedIn()) header("Location: Login.php");

$uid = $_SESSION['user_id'];
$sql = "SELECT * FROM orders WHERE user_id = $uid AND status IN ('Completed', 'Cancelled') ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-4xl font-black text-gray-800 mb-8 flex items-center gap-3">
            <i class="fa-solid fa-clock-rotate-left text-[#ff4fa1]"></i> Order History
        </h1>

        <div class="space-y-6">
            <?php if ($result->num_rows > 0): ?>
                <?php while($order = $result->fetch_assoc()): ?>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100 opacity-80 hover:opacity-100 transition">
                        <div class="flex justify-between items-center mb-2">
                            <p class="text-xs font-bold text-gray-400 uppercase">Order ID: #<?php echo str_pad($order['order_id'], 6, '0', STR_PAD_LEFT); ?></p>
                            <span class="px-3 py-1 rounded-full font-bold text-xs 
                                <?php echo $order['status']=='Completed' ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600'; ?>">
                                <?php echo $order['status']; ?>
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-gray-500 text-sm"><?php echo date('M j, Y', strtotime($order['created_at'])); ?></p>
                            <p class="font-black text-gray-800">₱ <?php echo number_format($order['total_amount'], 2); ?></p>
                        </div>
                        <?php if($order['status'] == 'Completed'): ?>
                            <div class="mt-4 text-right">
                                <a href="Write_A_Review.php?order_id=<?php echo $order['order_id']; ?>" class="text-[#ff4fa1] font-bold text-sm hover:underline">Write a Review</a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="text-center py-20 text-gray-400">
                    <p class="font-bold text-xl">No past orders.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>