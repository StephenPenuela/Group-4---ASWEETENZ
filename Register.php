<?php
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $otp = rand(100000, 999999); 

    $check = $conn->query("SELECT email FROM users WHERE email='$email'");
    if ($check->num_rows > 0) {
        $error = "Email already registered!";
    } else {
        $conn->query("INSERT INTO users (username, email, password, verification_code) VALUES ('$username', '$email', '$password', '$otp')");
        $_SESSION['verify_email'] = $email;
        echo "<script>window.location.href='Verify(create).php';</script>";
    }
}
?>

<main class="flex flex-col items-center justify-center min-h-[80vh] relative">
    <div class="w-full h-full absolute inset-0 bg-gray-50 main-bg-pattern z-0"></div>

    <div class="relative z-10 bg-white p-10 rounded-[40px] w-full max-w-[500px] shadow-xl border-t-8 border-[#ff4fa1]">
        <h1 class="text-[#ff4fa1] text-4xl font-black mb-2 text-center">Create Account</h1>
        <p class="text-gray-400 mb-8 text-center font-bold">Join the sweet community!</p>

        <?php if(isset($error)) echo "<div class='bg-red-100 text-red-500 p-3 rounded-lg mb-6 text-center font-bold'>$error</div>"; ?>

        <form method="POST" class="space-y-4">
            <input type="text" name="username" placeholder="Username" required class="w-full py-3 px-6 border-2 border-gray-200 rounded-full focus:border-[#ff4fa1] outline-none transition font-bold">
            <input type="email" name="email" placeholder="Email Address" required class="w-full py-3 px-6 border-2 border-gray-200 rounded-full focus:border-[#ff4fa1] outline-none transition font-bold">
            <input type="password" name="password" placeholder="Password" required class="w-full py-3 px-6 border-2 border-gray-200 rounded-full focus:border-[#ff4fa1] outline-none transition font-bold">
            
            <button type="submit" class="mt-4 bg-[#ff4fa1] text-white py-4 w-full rounded-full text-xl font-black hover:bg-[#e03e8a] transition shadow-lg uppercase tracking-wider">
                Sign Up
            </button>
        </form>

        <p class="mt-6 text-center text-gray-500 font-bold">
            Already have an account? <a href="Login.php" class="text-[#ff4fa1] underline">Login here</a>
        </p>
    </div>
</main>

<?php include 'footer.php'; ?>