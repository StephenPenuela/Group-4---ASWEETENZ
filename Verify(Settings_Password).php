<?php 
include 'header.php'; 
if (!isLoggedIn()) header("Location: Login.php");

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $uid = $_SESSION['user_id'];

    // Fetch current hash
    $res = $conn->query("SELECT password FROM users WHERE user_id=$uid");
    $row = $res->fetch_assoc();

    if (password_verify($old_pass, $row['password'])) {
        $new_hash = password_hash($new_pass, PASSWORD_DEFAULT);
        $conn->query("UPDATE users SET password='$new_hash' WHERE user_id=$uid");
        echo "<script>alert('Password Changed!'); window.location.href='Customer_Settings.php';</script>";
    } else {
        $error = "Incorrect Old Password!";
    }
}
?>

<main class="main-bg-pattern min-h-[80vh] flex items-center justify-center px-4">
    <div class="bg-white p-10 rounded-[40px] shadow-lg border border-pink-100 max-w-md w-full text-center">
        <h1 class="text-3xl font-black text-[#ff4fa1] mb-8">Change Password</h1>
        
        <?php if($error) echo "<p class='text-red-500 font-bold mb-4'>$error</p>"; ?>

        <form method="POST" class="space-y-4">
            <input type="password" name="old_pass" placeholder="Current Password" required class="w-full py-3 px-6 border-2 border-gray-200 rounded-full focus:border-[#ff4fa1] outline-none transition font-bold">
            <input type="password" name="new_pass" placeholder="New Password" required class="w-full py-3 px-6 border-2 border-gray-200 rounded-full focus:border-[#ff4fa1] outline-none transition font-bold">
            
            <button type="submit" class="bg-[#ff4fa1] text-white w-full py-3 rounded-full font-bold text-xl hover:bg-[#e03e8a] transition shadow-md mt-4">
                Update Password
            </button>
        </form>
        <a href="Customer_Settings.php" class="block mt-6 text-gray-400 font-bold hover:text-[#ff4fa1]">Cancel</a>
    </div>
</main>

<?php include 'footer.php'; ?>