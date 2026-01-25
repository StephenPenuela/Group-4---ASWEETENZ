<?php 
include 'header.php'; 

if (!isLoggedIn()) {
    echo "<script>window.location.href='Login.php';</script>";
    exit();
}

// Fetch user data
$uid = $_SESSION['user_id'];
$user_q = $conn->query("SELECT * FROM users WHERE user_id = $uid");
$user = $user_q->fetch_assoc();
?>

<section class="bg-pink-50 py-10 px-[5%] border-b border-pink-100">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="flex items-center gap-6">
            <div class="w-24 h-24 bg-white rounded-full p-1 shadow-md">
                <img src="user.png" alt="Profile" class="w-full h-full object-cover rounded-full">
            </div>
            <div>
                <h2 class="text-4xl font-black text-gray-800"><?php echo $user['username']; ?></h2>
                <p class="text-gray-500 font-bold text-lg"><?php echo $user['email']; ?></p>
            </div>
        </div>
        
        <a href="Customer_Settings.php" class="bg-white px-8 py-3 rounded-full text-[#ff4fa1] font-bold shadow-sm hover:bg-[#ff4fa1] hover:text-white transition flex items-center gap-2">
            <i class="fa-solid fa-gear"></i> Settings
        </a>
    </div>
</section>

<main class="py-16 px-[5%] min-h-[600px]">
    <div class="max-w-5xl mx-auto">
        
        <h2 class="text-4xl font-black text-[#ff4fa1] mb-10 text-center uppercase">My Orders</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-20">
            <a href="To_Pay.php" class="bg-white p-8 rounded-3xl shadow-sm border hover:border-[#ff4fa1] flex flex-col items-center gap-4 transition hover:-translate-y-1">
                <i class="fa-solid fa-wallet text-5xl text-gray-300"></i>
                <span class="font-bold text-xl text-gray-600">To Pay</span>
            </a>
            <a href="To_Ship.php" class="bg-white p-8 rounded-3xl shadow-sm border hover:border-[#ff4fa1] flex flex-col items-center gap-4 transition hover:-translate-y-1">
                <i class="fa-solid fa-box-open text-5xl text-gray-300"></i>
                <span class="font-bold text-xl text-gray-600">To Ship</span>
            </a>
            <a href="To_Receive.php" class="bg-white p-8 rounded-3xl shadow-sm border hover:border-[#ff4fa1] flex flex-col items-center gap-4 transition hover:-translate-y-1">
                <i class="fa-solid fa-truck-fast text-5xl text-gray-300"></i>
                <span class="font-bold text-xl text-gray-600">To Receive</span>
            </a>
            <a href="Order_History.php" class="bg-white p-8 rounded-3xl shadow-sm border hover:border-[#ff4fa1] flex flex-col items-center gap-4 transition hover:-translate-y-1">
                <i class="fa-solid fa-clock-rotate-left text-5xl text-gray-300"></i>
                <span class="font-bold text-xl text-gray-600">Completed</span>
            </a>
        </div>

        <div class="bg-[#fdf2f8] rounded-[40px] p-10 text-center">
            <h3 class="text-3xl font-bold text-gray-800 mb-4">Start Shopping?</h3>
            <p class="text-gray-500 mb-8 font-medium">Your cart is waiting for some cuteness!</p>
            <a href="Product_List.php" class="bg-[#ff4fa1] text-white px-10 py-3 rounded-full font-bold text-xl shadow-md hover:bg-[#e03e8a] transition">Browse Products</a>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>