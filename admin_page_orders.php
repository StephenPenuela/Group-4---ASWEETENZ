<?php
include 'db_connect.php';
if (!isAdmin()) { header("Location: Login.php"); exit(); }

// Handle Status Update
if (isset($_POST['update_status'])) {
    $oid = $_POST['order_id'];
    $status = $_POST['status'];
    $conn->query("UPDATE orders SET status='$status' WHERE order_id=$oid");
    
    // Log Action
    $admin_id = $_SESSION['user_id'];
    $conn->query("INSERT INTO admin_logs (admin_id, action, details) VALUES ($admin_id, 'Update Order', 'Updated Order #$oid to $status')");
    
    echo "<script>alert('Order Status Updated!'); window.location.href='admin_page_orders.php';</script>";
}

// Fetch Orders
$result = $conn->query("SELECT o.*, u.username FROM orders o JOIN users u ON o.user_id = u.user_id ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Manage Orders</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>body { font-family: 'Fredoka', sans-serif; }</style>
</head>
<body class="bg-gray-50 flex">
    
    <aside class="w-64 bg-white h-screen fixed border-r border-pink-100 flex flex-col">
        <div class="p-6 flex items-center justify-center border-b border-pink-50"><img src="Logo.png" class="w-20"></div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="admin_dashboard.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold transition"><i class="fa-solid fa-chart-pie"></i> Dashboard</a>
            <a href="admin_page_orders.php" class="flex items-center gap-3 px-4 py-3 bg-pink-50 text-[#ff4fa1] rounded-xl font-bold"><i class="fa-solid fa-box"></i> Orders</a>
            <a href="admin_page_products.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold transition"><i class="fa-solid fa-tag"></i> Products</a>
            <a href="admin_logs_page.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold transition"><i class="fa-solid fa-list"></i> Logs</a>
        </nav>
    </aside>

    <main class="ml-64 flex-1 p-8">
        <h1 class="text-3xl font-black text-gray-800 mb-8">Manage Orders</h1>

        <div class="bg-white rounded-3xl shadow-sm border border-pink-50 overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-pink-50 text-gray-600 font-bold uppercase text-sm">
                    <tr>
                        <th class="p-4">Order ID</th>
                        <th class="p-4">Customer</th>
                        <th class="p-4">Total</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 font-bold">#<?php echo str_pad($row['order_id'], 6, '0', STR_PAD_LEFT); ?></td>
                        <td class="p-4"><?php echo $row['username']; ?></td>
                        <td class="p-4 font-bold text-[#ff4fa1]">₱ <?php echo $row['total_amount']; ?></td>
                        <td class="p-4">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-gray-100 text-gray-600">
                                <?php echo $row['status']; ?>
                            </span>
                        </td>
                        <td class="p-4">
                            <form method="POST" class="flex items-center gap-2">
                                <input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
                                <select name="status" class="bg-gray-50 border border-gray-200 rounded-lg px-2 py-1 text-sm outline-none">
                                    <option value="To Pay" <?php echo $row['status']=='To Pay'?'selected':''; ?>>To Pay</option>
                                    <option value="To Ship" <?php echo $row['status']=='To Ship'?'selected':''; ?>>To Ship</option>
                                    <option value="To Receive" <?php echo $row['status']=='To Receive'?'selected':''; ?>>To Receive</option>
                                    <option value="Completed" <?php echo $row['status']=='Completed'?'selected':''; ?>>Completed</option>
                                    <option value="Cancelled" <?php echo $row['status']=='Cancelled'?'selected':''; ?>>Cancelled</option>
                                </select>
                                <button type="submit" name="update_status" class="text-[#ff4fa1] hover:text-[#e03e8a]"><i class="fa-solid fa-floppy-disk"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>