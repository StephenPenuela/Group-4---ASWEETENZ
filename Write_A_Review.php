<?php 
include 'header.php'; 
if (!isLoggedIn()) header("Location: Login.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Save review logic (Placeholder)
    echo "<script>alert('Thank you for your feedback!'); window.location.href='Order_History.php';</script>";
}
?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">
    <div class="max-w-2xl mx-auto bg-white p-10 rounded-[40px] shadow-lg border border-pink-50">
        <h1 class="text-[#ff4fa1] text-4xl font-black mb-2 text-center">Write a Review</h1>
        <p class="text-gray-400 font-bold text-center mb-10">How was your order?</p>

        <form method="POST" class="space-y-8">
            
            <div class="flex flex-col items-center gap-4">
                <p class="font-bold text-gray-700 text-lg">Rate Product</p>
                <div class="flex gap-4 text-4xl text-gray-300 cursor-pointer" id="stars">
                    <i class="fa-solid fa-star hover:text-yellow-400 transition" onclick="rate(1)"></i>
                    <i class="fa-solid fa-star hover:text-yellow-400 transition" onclick="rate(2)"></i>
                    <i class="fa-solid fa-star hover:text-yellow-400 transition" onclick="rate(3)"></i>
                    <i class="fa-solid fa-star hover:text-yellow-400 transition" onclick="rate(4)"></i>
                    <i class="fa-solid fa-star hover:text-yellow-400 transition" onclick="rate(5)"></i>
                </div>
                <input type="hidden" name="rating" id="ratingValue" value="5">
            </div>

            <div>
                <label class="font-bold text-gray-700 block mb-2">Your Experience</label>
                <textarea name="comment" rows="5" class="w-full p-4 border-2 border-gray-200 rounded-2xl focus:border-[#ff4fa1] outline-none" placeholder="Tell us what you think..."></textarea>
            </div>

            <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 text-center cursor-pointer hover:border-[#ff4fa1] hover:bg-pink-50 transition">
                <i class="fa-solid fa-camera text-2xl text-gray-400 mb-2"></i>
                <p class="text-gray-500 font-bold text-sm">Add Photo</p>
            </div>

            <button type="submit" class="bg-[#ff4fa1] text-white w-full py-4 rounded-full font-bold text-xl hover:bg-[#e03e8a] transition shadow-md">
                Submit Review
            </button>
        </form>
    </div>
</main>

<script>
function rate(val) {
    document.getElementById('ratingValue').value = val;
    let stars = document.getElementById('stars').children;
    for(let i=0; i<5; i++) {
        if(i < val) stars[i].classList.add('text-yellow-400');
        else stars[i].classList.remove('text-yellow-400');
    }
}
// Initialize with 5 stars
rate(5);
</script>

<?php include 'footer.php'; ?>