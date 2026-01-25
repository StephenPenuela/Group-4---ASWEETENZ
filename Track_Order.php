<?php 
include 'header.php'; 

// Mock data if no ID provided, otherwise fetch real data
$order_id = isset($_GET['id']) ? $_GET['id'] : 0;
$status = "To Pay"; // Default
$created_at = date("Y-m-d");

if($order_id > 0) {
    $res = $conn->query("SELECT * FROM orders WHERE order_id=$order_id");
    if($res->num_rows > 0) {
        $data = $res->fetch_assoc();
        $status = $data['status'];
        $created_at = $data['created_at'];
    }
}

// Helper to determine active state of timeline dots
function getStatusClass($current, $target) {
    $stages = ['To Pay', 'To Ship', 'To Receive', 'Completed'];
    $currIdx = array_search($current, $stages);
    $targIdx = array_search($target, $stages);
    return ($currIdx >= $targIdx) ? 'bg-[#ff4fa1] text-white' : 'bg-gray-200 text-gray-400';
}
?>

<main class="main-bg-pattern min-h-screen py-16 px-[5%]">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-center text-[#ff4fa1] text-4xl font-black mb-12 uppercase">Track Order #<?php echo str_pad($order_id, 6, '0', STR_PAD_LEFT); ?></h1>

        <div class="relative flex justify-between items-center mb-16">
            <div class="absolute top-1/2 left-0 w-full h-1 bg-gray-200 -z-10"></div>
            <div class="absolute top-1/2 left-0 h-1 bg-[#ff4fa1] -z-10 transition-all duration-1000" style="width: <?php 
                echo ($status=='To Pay')?'25%':(($status=='To Ship')?'50%':(($status=='To Receive')?'75%':'100%')); 
            ?>"></div>

            <div class="flex flex-col items-center gap-2 bg-white p-2">
                <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl <?php echo getStatusClass($status, 'To Pay'); ?>">
                    <i class="fa-solid fa-wallet"></i>
                </div>
                <p class="font-bold text-gray-600">To Pay</p>
            </div>

            <div class="flex flex-col items-center gap-2 bg-white p-2">
                <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl <?php echo getStatusClass($status, 'To Ship'); ?>">
                    <i class="fa-solid fa-box-open"></i>
                </div>
                <p class="font-bold text-gray-600">To Ship</p>
            </div>

            <div class="flex flex-col items-center gap-2 bg-white p-2">
                <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl <?php echo getStatusClass($status, 'To Receive'); ?>">
                    <i class="fa-solid fa-truck"></i>
                </div>
                <p class="font-bold text-gray-600">To Receive</p>
            </div>

            <div class="flex flex-col items-center gap-2 bg-white p-2">
                <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl <?php echo getStatusClass($status, 'Completed'); ?>">
                    <i class="fa-solid fa-check"></i>
                </div>
                <p class="font-bold text-gray-600">Completed</p>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[40px] shadow-sm border border-pink-50">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Order Details</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-gray-400 font-bold uppercase text-xs">Order Date</p>
                    <p class="text-lg font-bold text-gray-700"><?php echo date('F j, Y', strtotime($created_at)); ?></p>
                </div>
                <div>
                    <p class="text-gray-400 font-bold uppercase text-xs">Payment Method</p>
                    <p class="text-lg font-bold text-gray-700">Cash on Delivery (COD)</p>
                </div>
                <div class="md:col-span-2">
                     <p class="text-gray-400 font-bold uppercase text-xs">Latest Update</p>
                     <p class="text-lg font-bold text-[#ff4fa1]">
                        <?php 
                        if($status == 'To Pay') echo "Waiting for payment verification.";
                        elseif($status == 'To Ship') echo "Seller is packing your order.";
                        elseif($status == 'To Receive') echo "Parcel is with the courier.";
                        else echo "Package delivered successfully.";
                        ?>
                     </p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>