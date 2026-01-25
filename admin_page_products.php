<?php
include 'db_connect.php';
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') { header("Location: Login.php"); exit(); }

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM products WHERE product_id=$id");
    header("Location: admin_products.php");
}

$result = $conn->query("SELECT * FROM products ORDER BY product_id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Products</title>
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
            <a href="admin_products.php" class="flex items-center gap-3 px-4 py-3 bg-[#ff4fa1] text-white rounded-xl font-bold"><i class="fa-solid fa-box"></i> Products</a>
            <a href="admin_orders.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold"><i class="fa-solid fa-clipboard-list"></i> Orders</a>
            <a href="admin_users.php" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:text-[#ff4fa1] font-bold"><i class="fa-solid fa-users"></i> Users</a>
        </nav>
    </aside>

    <main class="ml-64 flex-1 p-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-black text-gray-800">Product Inventory</h1>
            <a href="admin_product_form.php" class="bg-[#ff4fa1] text-white px-6 py-2 rounded-full font-bold shadow-md hover:bg-[#e03e8a] transition">
                <i class="fa-solid fa-plus"></i> Add New
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden group hover:border-pink-200 transition">
                    <div class="h-48 bg-gray-50 overflow-hidden relative">
                        <img src="<?php echo $row['image_url']; ?>" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-300">
                            <a href="admin_product_form.php?edit=<?php echo $row['product_id']; ?>" class="bg-white text-blue-500 w-10 h-10 rounded-full flex items-center justify-center font-bold hover:scale-110 transition"><i class="fa-solid fa-pen"></i></a>
                            <a href="admin_products.php?delete=<?php echo $row['product_id']; ?>" onclick="return confirm('Delete this product?');" class="bg-white text-red-500 w-10 h-10 rounded-full flex items-center justify-center font-bold hover:scale-110 transition"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 truncate"><?php echo $row['name']; ?></h3>
                        <p class="text-xs text-gray-400 font-bold uppercase mb-2"><?php echo $row['category']; ?></p>
                        <div class="flex justify-between items-center">
                            <p class="text-[#ff4fa1] font-black text-lg">₱ <?php echo $row['price']; ?></p>
                            <p class="text-xs bg-gray-100 px-2 py-1 rounded-md font-bold text-gray-500">Stock: <?php echo $row['stock']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </main>
</body>
</html>