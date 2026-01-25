<?php 
if(session_status() === PHP_SESSION_NONE) session_start();
if(!isset($conn)) { if(file_exists('db_connect.php')) include 'db_connect.php'; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASweetenz</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="style_main.css">
    <style>
        body { font-family: 'Fredoka', sans-serif; }
    </style>
</head>
<body class="bg-white text-[#4a4a4a]">

    <div class="w-full h-[50px] bg-[#ffcae1]"></div>

    <header class="relative w-full h-[180px] bg-[url('banner.png')] bg-[length:100%_100%] bg-no-repeat flex items-center px-[5%] box-border">

        <div class="z-10 mt-[-20px]">
            <a href="Home.php"><img src="Logo_Banner.png" alt="Logo" class="h-20 hover:scale-105 transition"></a>
        </div>

        <nav class="absolute left-1/2 -translate-x-1/2 flex gap-x-12 hidden md:flex items-center">
            <a href="Home.php" class="text-white text-2xl font-bold no-underline hover:opacity-80 transition-opacity drop-shadow-md">Home</a>
            <a href="Product_List.php" class="text-white text-2xl font-bold no-underline hover:opacity-80 transition-opacity drop-shadow-md">Shop All</a>
            <a href="Collection.php" class="text-white text-2xl font-bold no-underline hover:opacity-80 transition-opacity drop-shadow-md">Collections</a>
            <a href="About_page.php" class="text-white text-2xl font-bold no-underline hover:opacity-80 transition-opacity drop-shadow-md">About</a>
            
            <?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
                <a href="admin_dashboard.php" class="bg-white text-[#ff4fa1] px-4 py-2 rounded-full font-black text-lg shadow-lg hover:bg-gray-100 transition flex items-center gap-2 border-2 border-[#ff4fa1]">
                    <i class="fa-solid fa-lock"></i> ADMIN
                </a>
            <?php endif; ?>
        </nav>

        <div class="ml-auto flex items-center gap-6 z-10">
            
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="Customer_Account.php">
                    <img src="user.png" alt="User" class="h-8 w-8 hover:opacity-80 transition cursor-pointer brightness-0 invert">
                </a>
            <?php else: ?>
                <a href="Login.php" class="bg-white text-[#ff4fa1] px-4 py-1 rounded-full font-bold shadow-md hover:bg-gray-100 transition">
                    Login
                </a>
            <?php endif; ?>

            <img src="search.png" alt="Search" class="h-6 w-6 hover:opacity-80 transition cursor-pointer brightness-0 invert">

            <a href="Cart.php" class="relative">
                <img src="cart.png" alt="Cart" class="h-8 w-8 hover:opacity-80 transition cursor-pointer brightness-0 invert">
                <?php 
                    if(isset($_SESSION['user_id']) && isset($conn)){
                        $uid = $_SESSION['user_id'];
                        $q = $conn->query("SELECT SUM(quantity) as t FROM cart WHERE user_id=$uid");
                        if($q){ $d=$q->fetch_assoc(); if($d['t']>0) echo '<span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full border border-white">'.$d['t'].'</span>'; }
                    }
                ?>
            </a>
            
            <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="md:hidden text-white text-3xl ml-4">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-b-4 border-[#ff4fa1] shadow-xl">
        <div class="flex flex-col text-center py-4 space-y-4">
            <a href="Home.php" class="text-[#ff4fa1] font-bold text-xl">Home</a>
            <a href="Product_List.php" class="text-gray-600 font-bold text-xl">Shop All</a>
            <a href="Collection.php" class="text-gray-600 font-bold text-xl">Collections</a>
            <a href="About_page.php" class="text-gray-600 font-bold text-xl">About</a>
            <?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
                <a href="admin_dashboard.php" class="text-red-500 font-black text-xl border-t border-gray-100 pt-2">ADMIN PANEL</a>
            <?php endif; ?>
        </div>
    </div>