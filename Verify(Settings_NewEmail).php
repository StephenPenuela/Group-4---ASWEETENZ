<?php 
include 'header.php'; 
if (!isLoggedIn()) header("Location: Login.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_email = $_POST['new_email'];
    $uid = $_SESSION['user_id'];

    // Update DB
    $sql = "UPDATE users SET email='$new_email', verification_code=NULL WHERE user_id=$uid";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Email Updated Successfully!'); window.location.href='Customer_Settings.php';</script>";
    } else {
        $error = "Error updating email.";
    }
}
?>

<main class="main-bg-pattern min-h-[80vh] flex items-center justify-center px-4">
    <div class="bg-white p-10 rounded-[40px] shadow-lg border border-pink-100 max-w-md w-full text-center">
        <h1 class="text-3xl font-black text-[#ff4fa1] mb-4">Update Email</h1>
        <p class="text-gray-500 mb-8 font-bold">Enter your new email address.</p>

        <form method="POST">
            <input type="email" name="new_email" placeholder="New Email Address" required class="w-full py-3 px-6 border-2 border-gray-200 rounded-full focus:border-[#ff4fa1] outline-none transition font-bold mb-6">
            <button type="submit" class="bg-[#ff4fa1] text-white w-full py-3 rounded-full font-bold text-xl hover:bg-[#e03e8a] transition shadow-md">
                Save Changes
            </button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>