<?php 
include 'header.php'; 
if (!isLoggedIn()) header("Location: Login.php");
?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">
    <div class="max-w-2xl mx-auto bg-white rounded-[40px] shadow-sm border border-pink-50 overflow-hidden">
        
        <div class="p-8 border-b border-gray-100 bg-pink-50">
            <h1 class="text-3xl font-black text-gray-800 flex items-center gap-3">
                <i class="fa-solid fa-gear text-[#ff4fa1]"></i> Account Settings
            </h1>
        </div>

        <div class="divide-y divide-gray-100">
            <a href="Account_Information.php" class="flex items-center justify-between p-6 hover:bg-gray-50 transition group">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-blue-400 group-hover:bg-blue-100 transition">
                        <i class="fa-solid fa-user text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-700">Account Information</h3>
                        <p class="text-gray-400 text-sm">Edit profile details</p>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-300 group-hover:text-[#ff4fa1]"></i>
            </a>

            <a href="Address_Detail.php" class="flex items-center justify-between p-6 hover:bg-gray-50 transition group">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-orange-50 rounded-full flex items-center justify-center text-orange-400 group-hover:bg-orange-100 transition">
                        <i class="fa-solid fa-location-dot text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-700">My Addresses</h3>
                        <p class="text-gray-400 text-sm">Manage delivery locations</p>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-300 group-hover:text-[#ff4fa1]"></i>
            </a>

            <a href="Verify(Settings_Password).php" class="flex items-center justify-between p-6 hover:bg-gray-50 transition group">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-purple-50 rounded-full flex items-center justify-center text-purple-400 group-hover:bg-purple-100 transition">
                        <i class="fa-solid fa-lock text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-700">Change Password</h3>
                        <p class="text-gray-400 text-sm">Update your security</p>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-300 group-hover:text-[#ff4fa1]"></i>
            </a>

            <a href="Logout.php" class="flex items-center justify-between p-6 hover:bg-red-50 transition group">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-red-50 rounded-full flex items-center justify-center text-red-400 group-hover:bg-red-100 transition">
                        <i class="fa-solid fa-right-from-bracket text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-red-500">Logout</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>