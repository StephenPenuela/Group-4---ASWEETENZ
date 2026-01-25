<?php
// Include the Master Header (This handles the pink bar, banner, and html tags)
include 'header.php';

// Handle Login Logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Set Session Variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_role'] = $row['user_role']; // Vital for Admin Check

            // Redirect based on role
            if ($row['user_role'] == 'admin') {
                echo "<script>window.location.href='admin_dashboard.php';</script>";
            } else {
                echo "<script>window.location.href='Home.php';</script>";
            }
            exit();
        } else {
            $error = "Incorrect Password!";
        }
    } else {
        $error = "User not found!";
    }
}
?>

<main class="flex flex-col items-center justify-center min-h-[80vh] py-16 px-4 bg-gray-50">
    
    <div class="bg-white p-10 rounded-[40px] w-full max-w-[500px] shadow-xl border-4 border-[#ffcae1] relative z-10">
        
        <div class="text-center mb-8">
            <img src="Logo.png" alt="Logo" class="h-24 mx-auto mb-4">
            <h1 class="text-[#ff4fa1] text-4xl font-black uppercase tracking-wide">Welcome Back</h1>
            <p class="text-gray-400 font-bold">Login to continue shopping</p>
        </div>

        <?php if(isset($error)): ?>
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 font-bold rounded-r">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="space-y-6">
            <div>
                <label class="block text-gray-600 font-bold mb-2 ml-2">Email Address</label>
                <input type="email" name="email" required class="w-full py-3 px-6 border-2 border-gray-200 rounded-full focus:border-[#ff4fa1] outline-none transition font-bold text-gray-600 bg-gray-50">
            </div>
            
            <div>
                <label class="block text-gray-600 font-bold mb-2 ml-2">Password</label>
                <input type="password" name="password" required class="w-full py-3 px-6 border-2 border-gray-200 rounded-full focus:border-[#ff4fa1] outline-none transition font-bold text-gray-600 bg-gray-50">
                <div class="text-right mt-2">
                    <a href="Reset_Password(Enter_Email).php" class="text-sm text-gray-400 hover:text-[#ff4fa1] font-bold transition">Forgot Password?</a>
                </div>
            </div>
            
            <button type="submit" class="bg-[#ff4fa1] text-white py-4 w-full rounded-full text-xl font-black hover:bg-[#e03e8a] transition shadow-lg transform active:scale-95 uppercase tracking-wider">
                Login
            </button>
        </form>
        
        <div class="text-center mt-8 border-t border-gray-100 pt-6">
            <p class="text-gray-500 font-bold">
                New here? <a href="Register.php" class="text-[#ff4fa1] hover:underline font-black">Create an Account</a>
            </p>
        </div>
    </div>

</main>

<?php include 'footer.php'; ?>