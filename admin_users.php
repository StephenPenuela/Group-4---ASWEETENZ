<?php
include 'db_connect.php';
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') { header("Location: Login.php"); exit(); }

if (isset($_GET['ban'])) {
    $uid = $_GET['ban'];
    $conn->query("DELETE FROM users WHERE user_id=$uid"); // Permanent ban (Delete)
    header("Location: admin_users.php");
}

$result = $conn->query("SELECT * FROM users WHERE user_role = 'customer'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Users</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>body { font-family: 'Fredoka', sans-serif; }</style>
</head>
<body class="bg-gray-100 flex">
    
    <aside class="w-64 bg-white h-screen fixed border-r border-gray-200 flex flex-col z-20">
        <div class="p-6 border-b border-pink-50"><img src="Logo_Banner.png" class="h-16 mx-auto"></div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="admin_dashboard.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
            <a href="admin_products.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold"><i class="fa-solid fa-box"></i> Products</a>
            <a href="admin_orders.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold"><i class="fa-solid fa-clipboard-list"></i> Orders</a>
            <a href="admin_users.php" class="flex items-center gap-3 px-4 py-3 bg-[#ff4fa1] text-white rounded-xl font-bold"><i class="fa-solid fa-users"></i> Users</a>
        </nav>
    </aside>

    <main class="ml-64 flex-1 p-8">
        <h1 class="text-3xl font-black text-gray-800 mb-8">Registered Customers</h1>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-pink-50 text-gray-600 font-bold uppercase text-sm">
                    <tr>
                        <th class="p-5">ID</th>
                        <th class="p-5">Username</th>
                        <th class="p-5">Email</th>
                        <th class="p-5">Joined</th>
                        <th class="p-5">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-5 font-bold text-gray-400">#<?php echo $row['user_id']; ?></td>
                        <td class="p-5 font-bold text-gray-800"><?php echo $row['username']; ?></td>
                        <td class="p-5 text-gray-600"><?php echo $row['email']; ?></td>
                        <td class="p-5 text-gray-500 text-sm"><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                        <td class="p-5">
                            <a href="admin_users.php?ban=<?php echo $row['user_id']; ?>" onclick="return confirm('Ban this user?');" class="bg-red-100 text-red-500 px-4 py-2 rounded-full font-bold text-xs hover:bg-red-500 hover:text-white transition">Ban User</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>