<?php
include 'db_connect.php';

// 1. Security Check: Only Admins Allowed
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: Login.php");
    exit();
}

// 2. Handle Status Update Logic
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_status'])) {
    $order_id = intval($_POST['order_id']);
    $new_status = $_POST['status'];

    // Update the database
    $stmt = $conn->prepare("UPDATE orders SET status = ? WHERE order_id = ?");
    $stmt->bind_param("si", $new_status, $order_id);
    
    if ($stmt->execute()) {
        // Optional: Log this action if you set up the logs table
        $admin_id = $_SESSION['user_id'];
        $details = "Updated Order #$order_id status to $new_status";
        $conn->query("INSERT INTO admin_logs (admin_id, action, details) VALUES ($admin_id, 'Update Status', '$details')");
        
        $success_msg = "Order #$order_id updated to $new_status";
    } else {
        $error_msg = "Failed to update order.";
    }
}

// 3. Fetch All Orders (Newest First)
// We join with the 'users' table so we can see WHO bought the item
$sql = "SELECT o.*, u.username, u.email 
        FROM orders o 
        JOIN users u ON o.user_id = u.user_id 
        ORDER BY o.created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Orders - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>body { font-family: 'Fredoka', sans-serif; }</style>
</head>
<body class="bg-gray-100 flex">

    <aside class="w-64 bg-white h-screen fixed border-r border-gray-200 flex flex-col z-20">
        <div class="p-6 border-b border-pink-50 flex justify-center">
            <img src="Logo_Banner.png" class="h-16">
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="admin_dashboard.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold transition">
                <i class="fa-solid fa-chart-line"></i> Dashboard
            </a>
            <a href="admin_products.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold transition">
                <i class="fa-solid fa-box"></i> Products
            </a>
            <a href="admin_orders.php" class="flex items-center gap-3 px-4 py-3 bg-[#ff4fa1] text-white rounded-xl font-bold shadow-md">
                <i class="fa-solid fa-clipboard-list"></i> Orders
            </a>
            <a href="admin_users.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold transition">
                <i class="fa-solid fa-users"></i> Users
            </a>
        </nav>
        <div class="p-4 border-t border-gray-100">
            <a href="Logout.php" class="flex items-center gap-3 px-4 py-3 text-red-500 hover:bg-red-50 rounded-xl font-bold transition">
                <i class="fa-solid fa-power-off"></i> Logout
            </a>
        </div>
    </aside>

    <main class="ml-64 flex-1 p-8">
        
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-black text-gray-800">Order Management</h1>
            <div class="bg-white px-4 py-2 rounded-full shadow-sm text-sm font-bold text-gray-500 border border-gray-100">
                Total Orders: <?php echo $result->num_rows; ?>
            </div>
        </div>

        <?php if(isset($success_msg)): ?>
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-r shadow-sm">
                <p class="font-bold"><i class="fa-solid fa-check-circle"></i> Success</p>
                <p><?php echo $success_msg; ?></p>
            </div>
        <?php endif; ?>

        <div class="bg-white rounded-[30px] shadow-sm border border-gray-100 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead class="bg-pink-50 text-gray-600 font-bold uppercase text-xs tracking-wider">
                    <tr>
                        <th class="p-5">Order ID</th>
                        <th class="p-5">Customer</th>
                        <th class="p-5">Date</th>
                        <th class="p-5">Total</th>
                        <th class="p-5">Payment</th>
                        <th class="p-5">Current Status</th>
                        <th class="p-5">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    <?php if ($result->num_rows > 0): ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <tr class="hover:bg-gray-50 transition duration-150">
                                
                                <td class="p-5 font-bold text-gray-400">
                                    #<?php echo str_pad($row['order_id'], 6, '0', STR_PAD_LEFT); ?>
                                </td>

                                <td class="p-5">
                                    <p class="font-bold text-gray-800 text-base"><?php echo htmlspecialchars($row['username']); ?></p>
                                    <p class="text-xs text-gray-400"><?php echo htmlspecialchars($row['email']); ?></p>
                                </td>

                                <td class="p-5 text-gray-600 font-medium">
                                    <?php echo date('M j, Y', strtotime($row['created_at'])); ?>
                                </td>

                                <td class="p-5 font-black text-[#ff4fa1] text-base">
                                    ₱<?php echo number_format($row['total_amount'], 2); ?>
                                </td>

                                <td class="p-5">
                                    <span class="px-3 py-1 rounded-lg bg-gray-100 text-gray-600 font-bold text-xs border border-gray-200">
                                        <?php echo htmlspecialchars($row['payment_method']); ?>
                                    </span>
                                </td>

                                <td class="p-5">
                                    <?php 
                                        $s = $row['status'];
                                        $badgeColor = 'bg-gray-100 text-gray-500'; // Default
                                        if($s == 'To Pay') $badgeColor = 'bg-yellow-100 text-yellow-600';
                                        if($s == 'To Ship') $badgeColor = 'bg-blue-100 text-blue-600';
                                        if($s == 'To Receive') $badgeColor = 'bg-purple-100 text-purple-600';
                                        if($s == 'Completed') $badgeColor = 'bg-green-100 text-green-600';
                                        if($s == 'Cancelled') $badgeColor = 'bg-red-100 text-red-600';
                                    ?>
                                    <span class="px-3 py-1 rounded-full font-bold text-xs <?php echo $badgeColor; ?>">
                                        <?php echo $s; ?>
                                    </span>
                                </td>

                                <td class="p-5">
                                    <form method="POST" class="flex items-center gap-2">
                                        <input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
                                        
                                        <div class="relative">
                                            <select name="status" class="appearance-none bg-white border border-gray-300 text-gray-700 py-2 pl-3 pr-8 rounded-xl leading-tight focus:outline-none focus:border-[#ff4fa1] font-bold text-xs cursor-pointer hover:border-gray-400 transition">
                                                <option value="To Pay" <?php echo ($s == 'To Pay') ? 'selected' : ''; ?>>To Pay (Pending)</option>
                                                <option value="To Ship" <?php echo ($s == 'To Ship') ? 'selected' : ''; ?>>To Ship (Packed)</option>
                                                <option value="To Receive" <?php echo ($s == 'To Receive') ? 'selected' : ''; ?>>To Receive (Shipped)</option>
                                                <option value="Completed" <?php echo ($s == 'Completed') ? 'selected' : ''; ?>>Completed</option>
                                                <option value="Cancelled" <?php echo ($s == 'Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <i class="fa-solid fa-chevron-down text-xs"></i>
                                            </div>
                                        </div>

                                        <button type="submit" name="update_status" class="bg-[#ff4fa1] text-white w-8 h-8 rounded-full flex items-center justify-center shadow-md hover:bg-[#e03e8a] transition transform active:scale-95" title="Save Status">
                                            <i class="fa-solid fa-floppy-disk text-xs"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="p-10 text-center text-gray-400 font-bold">
                                <i class="fa-solid fa-basket-shopping text-4xl mb-3 block opacity-50"></i>
                                No orders found yet.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </main>

</body>
</html>