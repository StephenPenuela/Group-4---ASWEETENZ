<?php
include 'db_connect.php';
if (!isAdmin()) { header("Location: Login.php"); exit(); }

$result = $conn->query("SELECT l.*, u.username FROM admin_logs l JOIN users u ON l.admin_id = u.user_id ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - System Logs</title>
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
            <a href="admin_page_orders.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold transition"><i class="fa-solid fa-box"></i> Orders</a>
            <a href="admin_page_products.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold transition"><i class="fa-solid fa-tag"></i> Products</a>
            <a href="admin_logs_page.php" class="flex items-center gap-3 px-4 py-3 bg-pink-50 text-[#ff4fa1] rounded-xl font-bold"><i class="fa-solid fa-list"></i> Logs</a>
        </nav>
    </aside>

    <main class="ml-64 flex-1 p-8">
        <h1 class="text-3xl font-black text-gray-800 mb-8">System Logs</h1>

        <div class="bg-white rounded-3xl shadow-sm border border-pink-50 overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-pink-50 text-gray-600 font-bold uppercase text-sm">
                    <tr>
                        <th class="p-4">Time</th>
                        <th class="p-4">Admin</th>
                        <th class="p-4">Action</th>
                        <th class="p-4">Details</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php if($result->num_rows > 0): ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="p-4 text-gray-500 text-sm"><?php echo $row['created_at']; ?></td>
                            <td class="p-4 font-bold"><?php echo $row['username']; ?></td>
                            <td class="p-4"><span class="bg-blue-50 text-blue-500 px-3 py-1 rounded-full text-xs font-bold"><?php echo $row['action']; ?></span></td>
                            <td class="p-4 text-gray-600"><?php echo $row['details']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr><td colspan="4" class="p-8 text-center text-gray-400">No logs found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>