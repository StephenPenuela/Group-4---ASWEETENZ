<?php 
include 'header.php'; 
if (!isLoggedIn()) header("Location: Login.php");

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];
    $uid = $_SESSION['user_id'];

    $check = $conn->query("SELECT * FROM users WHERE user_id=$uid AND verification_code='$code'");
    if ($check->num_rows > 0) {
        // Code correct, move to next step
        header("Location: Verify(Settings_NewEmail).php");
        exit();
    } else {
        $error = "Invalid Verification Code.";
    }
}
?>

<main class="main-bg-pattern min-h-[80vh] flex items-center justify-center px-4">
    <div class="bg-white p-10 rounded-[40px] shadow-lg border border-pink-100 max-w-md w-full text-center">
        <h1 class="text-3xl font-black text-[#ff4fa1] mb-4">Verification</h1>
        <p class="text-gray-500 mb-8 font-bold">Enter the 6-digit code we just generated (check database for testing).</p>

        <?php if($error) echo "<p class='text-red-500 font-bold mb-4'>$error</p>"; ?>

        <form method="POST">
            <input type="text" name="code" placeholder="123456" maxlength="6" required class="text-center text-3xl tracking-widest w-full py-4 border-2 border-gray-300 rounded-xl focus:border-[#ff4fa1] outline-none mb-6 font-mono">
            <button type="submit" class="bg-[#ff4fa1] text-white w-full py-3 rounded-full font-bold text-xl hover:bg-[#e03e8a] transition shadow-md">
                Verify
            </button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>