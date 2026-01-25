<?php
include 'db_connect.php';
// Admin Check
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') { header("Location: Login.php"); exit(); }

$id = ""; $name = ""; $desc = ""; $price = ""; $stock = ""; $cat = ""; $img = "";
$is_edit = false;

// IF EDITING: Fetch existing data
if (isset($_GET['edit'])) {
    $is_edit = true;
    $id = $_GET['edit'];
    $res = $conn->query("SELECT * FROM products WHERE product_id=$id");
    if($r = $res->fetch_assoc()) {
        $name = $r['name']; $desc = $r['description']; $price = $r['price']; 
        $stock = $r['stock']; $cat = $r['category']; $img = $r['image_url'];
    }
}

// HANDLE SUBMIT
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $desc = mysqli_real_escape_string($conn, $_POST['description']);
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $cat = $_POST['category'];
    $new_img = $_POST['image_base64']; // Hidden input carrying the base64 string

    // Use new image if uploaded, otherwise keep old one
    $final_img = (!empty($new_img)) ? $new_img : $img;

    if ($is_edit) {
        $sql = "UPDATE products SET name='$name', description='$desc', price='$price', stock='$stock', category='$cat', image_url='$final_img' WHERE product_id=$id";
    } else {
        $sql = "INSERT INTO products (name, description, price, stock, category, image_url) VALUES ('$name', '$desc', '$price', '$stock', '$cat', '$final_img')";
    }

    if ($conn->query($sql)) {
        header("Location: admin_products.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Editor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>body { font-family: 'Fredoka', sans-serif; }</style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen py-12 px-4">

    <div class="bg-white w-full max-w-4xl rounded-3xl shadow-xl overflow-hidden flex flex-col md:flex-row border border-pink-100">
        
        <div class="w-full md:w-1/3 bg-pink-50 p-8 flex flex-col items-center justify-center text-center">
            <h2 class="text-[#ff4fa1] font-bold text-xl mb-4">Image Preview</h2>
            <div class="w-48 h-48 bg-white rounded-2xl shadow-sm border-2 border-dashed border-pink-200 flex items-center justify-center overflow-hidden mb-4">
                <img id="preview" src="<?php echo $img ? $img : 'https://placehold.co/150x150?text=No+Image'; ?>" class="w-full h-full object-cover">
            </div>
            <p class="text-xs text-gray-500 font-bold">Supports JPG, PNG, WEBP</p>
        </div>

        <div class="w-full md:w-2/3 p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-black text-gray-800"><?php echo $is_edit ? 'Edit Product' : 'New Product'; ?></h1>
                <a href="admin_products.php" class="text-gray-400 hover:text-red-500"><i class="fa-solid fa-xmark text-2xl"></i></a>
            </div>

            <form method="POST" class="space-y-5">
                <input type="hidden" name="image_base64" id="image_base64">

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-gray-600 mb-1">Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>" required class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-[#ff4fa1]">
                    </div>
                    <div>
                        <label class="block font-bold text-gray-600 mb-1">Category</label>
                        <select name="category" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-[#ff4fa1]">
                            <option value="Stickers" <?php echo $cat=='Stickers'?'selected':''; ?>>Stickers</option>
                            <option value="Charms" <?php echo $cat=='Charms'?'selected':''; ?>>Charms</option>
                            <option value="Keychains" <?php echo $cat=='Keychains'?'selected':''; ?>>Keychains</option>
                            <option value="Totebags" <?php echo $cat=='Totebags'?'selected':''; ?>>Totebags</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block font-bold text-gray-600 mb-1">Description</label>
                    <textarea name="description" rows="3" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-[#ff4fa1]"><?php echo $desc; ?></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block font-bold text-gray-600 mb-1">Price (₱)</label>
                        <input type="number" step="0.01" name="price" value="<?php echo $price; ?>" required class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-[#ff4fa1]">
                    </div>
                    <div>
                        <label class="block font-bold text-gray-600 mb-1">Stock</label>
                        <input type="number" name="stock" value="<?php echo $stock; ?>" required class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 focus:outline-[#ff4fa1]">
                    </div>
                </div>

                <div>
                    <label class="block font-bold text-gray-600 mb-1">Upload Image</label>
                    <input type="file" id="fileInput" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-[#ff4fa1] file:text-white hover:file:bg-[#e03e8a]">
                </div>

                <button type="submit" class="w-full bg-[#ff4fa1] hover:bg-[#e03e8a] text-white font-bold py-4 rounded-xl shadow-lg transition transform active:scale-95 text-xl mt-4">
                    <?php echo $is_edit ? 'Save Changes' : 'Create Product'; ?>
                </button>
            </form>
        </div>
    </div>

    <script>
        // Convert Image to Base64 instantly
        document.getElementById('fileInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Update preview
                    document.getElementById('preview').src = e.target.result;
                    // Fill hidden input
                    document.getElementById('image_base64').value = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>