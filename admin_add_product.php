<?php
include 'db_connect.php';

// Check if admin
if (!isAdmin()) {
    header("Location: Login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $stock = $_POST['stock'];
    $category = $_POST['category'];

    // Basic Image Upload Logic
    $target_dir = ""; // Current folder
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $sql = "INSERT INTO products (name, description, price, stock, category, image_url) 
            VALUES ('$name', '$desc', '$price', '$stock', '$category', '$target_file')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Product Added Successfully!'); window.location.href='admin_page_products.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Fredoka', sans-serif; }</style>
</head>
<body class="bg-pink-50 min-h-screen flex items-center justify-center py-12 px-4">

    <div class="bg-white p-8 rounded-3xl shadow-xl w-full max-w-2xl border-4 border-[#ffcae1]">
        <h1 class="text-4xl font-black text-[#ff4fa1] mb-8 text-center uppercase">Add New Product</h1>
        
        <form method="POST" enctype="multipart/form-data" class="space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Product Name</label>
                    <input type="text" name="name" required class="w-full p-3 border-2 border-gray-200 rounded-xl focus:border-[#ff4fa1] outline-none">
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Price (PHP)</label>
                    <input type="number" step="0.01" name="price" required class="w-full p-3 border-2 border-gray-200 rounded-xl focus:border-[#ff4fa1] outline-none">
                </div>
            </div>

            <div>
                <label class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea name="description" rows="4" class="w-full p-3 border-2 border-gray-200 rounded-xl focus:border-[#ff4fa1] outline-none"></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Stock Count</label>
                    <input type="number" name="stock" required class="w-full p-3 border-2 border-gray-200 rounded-xl focus:border-[#ff4fa1] outline-none">
                </div>
                <div>
                    <label class="block text-gray-700 font-bold mb-2">Category</label>
                    <select name="category" class="w-full p-3 border-2 border-gray-200 rounded-xl focus:border-[#ff4fa1] outline-none bg-white">
                        <option value="Stickers">Stickers</option>
                        <option value="Charms">Charms</option>
                        <option value="Keychains">Keychains</option>
                        <option value="Totebags">Totebags</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-gray-700 font-bold mb-2">Product Image</label>
                <input type="file" name="image" required class="w-full p-3 border-2 border-gray-200 rounded-xl bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#ff4fa1] file:text-white hover:file:bg-[#e03e8a]">
            </div>

            <div class="flex gap-4 pt-4">
                <a href="admin_page_products.php" class="flex-1 py-3 rounded-full font-bold text-center text-gray-500 border-2 border-gray-200 hover:bg-gray-100">Cancel</a>
                <button type="submit" class="flex-1 bg-[#ff4fa1] text-white py-3 rounded-full font-bold text-xl hover:bg-[#e03e8a] shadow-md">Add Product</button>
            </div>
        </form>
    </div>

</body>
</html>