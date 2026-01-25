<?php 
include 'header.php'; 
if (!isLoggedIn()) header("Location: Login.php");

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $uid = $_SESSION['user_id'];
    
    // Verify it matches current account
    $check = $conn->query("SELECT * FROM users WHERE user_id=$uid AND email='$email'");
    if ($check->num_rows > 0) {
        // Generate OTP
        $otp = rand(100000, 999999);
        $conn->query("UPDATE users SET verification_code='$otp' WHERE user_id=$uid");
        
        $_SESSION['verify_mode'] = 'change_email';
        header("Location: Verify(Settings_Code).php");
        exit();
    } else {
        $error = "Email does not match our records.";
    }
}
?>

<main class="main-bg-pattern min-h-[80vh] flex items-center justify-center px-4">
    <div class="bg-white p-10 rounded-[40px] shadow-lg border border-pink-100 max-w-md w-full text-center">
        <h1 class="text-3xl font-black text-[#ff4fa1] mb-4">Security Check</h1>
        <p class="text-gray-500 mb-8 font-bold">Please enter your current email address to continue.</p>

        <?php if($error) echo "<p class='text-red-500 font-bold mb-4'>$error</p>"; ?>

        <form method="POST">
            <input type="email" name="email" placeholder="Current Email" required class="w-full py-3 px-6 border-2 border-gray-200 rounded-full focus:border-[#ff4fa1] outline-none transition font-bold mb-6">
            <button type="submit" class="bg-[#ff4fa1] text-white w-full py-3 rounded-full font-bold text-xl hover:bg-[#e03e8a] transition shadow-md">
                Send Code
            </button>
        </form>
        <a href="Customer_Settings.php" class="block mt-6 text-gray-400 font-bold hover:text-[#ff4fa1]">Cancel</a>
    </div>
</main>

<?php include 'footer.php'; ?>