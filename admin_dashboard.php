<?php
include 'db_connect.php';
// Security: Ensure only Admins can see this
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: Login.php"); exit();
}

// 1. Fetch Stats
$revenue     = $conn->query("SELECT SUM(total_amount) as rev FROM orders WHERE status='Completed'")->fetch_assoc()['rev'] ?? 0;
$total_orders= $conn->query("SELECT COUNT(*) as c FROM orders")->fetch_assoc()['c'];
$total_users = $conn->query("SELECT COUNT(*) as c FROM users WHERE user_role='customer'")->fetch_assoc()['c'];

// 2. Fetch Low Stock Items (Less than 10)
$low_stock = $conn->query("SELECT * FROM products WHERE stock < 10 LIMIT 5");

// 3. Data for Graphs
// Category Distribution
$cat_q = $conn->query("SELECT category, COUNT(*) as count FROM products GROUP BY category");
$cat_labels = []; $cat_data = [];
while($c = $cat_q->fetch_assoc()){ $cat_labels[] = $c['category']; $cat_data[] = $c['count']; }

// Recent Orders (Last 5)
$recent_orders = $conn->query("SELECT o.*, u.username FROM orders o JOIN users u ON o.user_id = u.user_id ORDER BY created_at DESC LIMIT 5");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Command Center</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>body { font-family: 'Fredoka', sans-serif; }</style>
</head>
<body class="bg-gray-100 flex">

    <aside class="w-64 bg-white h-screen fixed border-r border-gray-200 flex flex-col z-20">
        <div class="p-6 flex items-center justify-center border-b border-pink-50">
            <img src="Logo_Banner.png" class="h-16">
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="admin_dashboard.php" class="flex items-center gap-3 px-4 py-3 bg-[#ff4fa1] text-white rounded-xl font-bold shadow-md"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
            <a href="admin_products.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold transition"><i class="fa-solid fa-box"></i> Products</a>
            <a href="admin_orders.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold transition"><i class="fa-solid fa-clipboard-list"></i> Orders</a>
            <a href="admin_users.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold transition"><i class="fa-solid fa-users"></i> Users</a>
        </nav>
        <div class="p-4 border-t border-gray-100">
            <a href="Logout.php" class="flex items-center gap-3 px-4 py-3 text-red-500 hover:bg-red-50 rounded-xl font-bold transition"><i class="fa-solid fa-power-off"></i> Logout</a>
        </div>
    </aside>

    <main class="ml-64 flex-1 p-8">
        
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-4xl font-black text-gray-800">Dashboard</h1>
                <p class="text-gray-500 font-bold">Welcome back, Admin!</p>
            </div>
            <a href="admin_product_form.php" class="bg-[#ff4fa1] text-white px-6 py-3 rounded-full font-bold shadow-lg hover:bg-[#e03e8a] transition flex items-center gap-2">
                <i class="fa-solid fa-plus"></i> Add Product
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-3xl shadow-sm border-l-8 border-[#ff4fa1] flex items-center gap-4">
                <div class="w-16 h-16 rounded-full bg-pink-50 flex items-center justify-center text-[#ff4fa1] text-3xl"><i class="fa-solid fa-coins"></i></div>
                <div>
                    <p class="text-gray-400 font-bold uppercase text-xs">Total Revenue</p>
                    <p class="text-3xl font-black text-gray-800">₱ <?php echo number_format($revenue, 2); ?></p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-sm border-l-8 border-blue-400 flex items-center gap-4">
                <div class="w-16 h-16 rounded-full bg-blue-50 flex items-center justify-center text-blue-500 text-3xl"><i class="fa-solid fa-cart-shopping"></i></div>
                <div>
                    <p class="text-gray-400 font-bold uppercase text-xs">Total Orders</p>
                    <p class="text-3xl font-black text-gray-800"><?php echo $total_orders; ?></p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-sm border-l-8 border-purple-400 flex items-center gap-4">
                <div class="w-16 h-16 rounded-full bg-purple-50 flex items-center justify-center text-purple-500 text-3xl"><i class="fa-solid fa-users"></i></div>
                <div>
                    <p class="text-gray-400 font-bold uppercase text-xs">Registered Users</p>
                    <p class="text-3xl font-black text-gray-800"><?php echo $total_users; ?></p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
            
            <div class="bg-white p-6 rounded-3xl shadow-sm col-span-2">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Inventory Breakdown</h3>
                <div class="h-64">
                    <canvas id="catChart"></canvas>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl shadow-sm border border-red-100">
                <h3 class="text-xl font-bold text-red-500 mb-4 flex items-center gap-2">
                    <i class="fa-solid fa-triangle-exclamation"></i> Low Stock Alert
                </h3>
                <div class="space-y-4">
                    <?php if($low_stock->num_rows > 0): ?>
                        <?php while($item = $low_stock->fetch_assoc()): ?>
                            <div class="flex items-center justify-between p-3 bg-red-50 rounded-xl">
                                <div class="flex items-center gap-3">
                                    <img src="<?php echo $item['image_url']; ?>" class="w-10 h-10 rounded-lg object-cover">
                                    <div>
                                        <p class="font-bold text-gray-800 text-sm"><?php echo $item['name']; ?></p>
                                        <p class="text-xs text-red-500 font-bold">Only <?php echo $item['stock']; ?> left!</p>
                                    </div>
                                </div>
                                <a href="admin_product_form.php?edit=<?php echo $item['product_id']; ?>" class="text-gray-400 hover:text-[#ff4fa1]"><i class="fa-solid fa-pen"></i></a>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <p class="text-green-500 font-bold text-center py-4">All stock levels are good! <i class="fa-solid fa-check"></i></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </main>

    <script>
        const ctx = document.getElementById('catChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($cat_labels); ?>,
                datasets: [{
                    label: 'Products per Category',
                    data: <?php echo json_encode($cat_data); ?>,
                    backgroundColor: ['#ff4fa1', '#3b82f6', '#a855f7', '#fbbf24'],
                    borderRadius: 10
                }]
            },
            options: { responsive: true, maintainAspectRatio: false }
        });
    </script>
</body>
</html>