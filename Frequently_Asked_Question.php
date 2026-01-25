<?php include 'header.php'; ?>

<main class="main-bg-pattern min-h-screen py-20 px-[5%]">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-center text-[#ff4fa1] text-5xl font-black mb-16 uppercase">Frequently Asked Questions</h1>

        <div class="space-y-6">
            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-md transition cursor-pointer group" onclick="this.classList.toggle('active')">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-[#ff4fa1] transition">How long does shipping take?</h3>
                    <i class="fa-solid fa-plus text-gray-400"></i>
                </div>
                <div class="hidden mt-4 text-gray-600 leading-relaxed active-content">
                    Shipping usually takes 2-3 business days within Metro Manila and 5-7 business days for provincial areas.
                </div>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-md transition cursor-pointer group" onclick="this.classList.toggle('active')">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-[#ff4fa1] transition">Do you accept returns?</h3>
                    <i class="fa-solid fa-plus text-gray-400"></i>
                </div>
                <div class="hidden mt-4 text-gray-600 leading-relaxed active-content">
                    Yes! We accept returns within 7 days of delivery if the item is defective or damaged. Please contact us with photos of the issue.
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-md transition cursor-pointer group" onclick="this.classList.toggle('active')">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-[#ff4fa1] transition">What payment methods do you accept?</h3>
                    <i class="fa-solid fa-plus text-gray-400"></i>
                </div>
                <div class="hidden mt-4 text-gray-600 leading-relaxed active-content">
                    We currently accept Cash on Delivery (COD) and GCash/E-Wallets.
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Simple script to toggle FAQ answers
    const items = document.querySelectorAll('.group');
    items.forEach(item => {
        item.addEventListener('click', () => {
            const content = item.querySelector('.hidden');
            if(content) {
                content.classList.remove('hidden');
                content.classList.add('block');
            } else {
                const visible = item.querySelector('.block');
                visible.classList.remove('block');
                visible.classList.add('hidden');
            }
        });
    });
</script>

<?php include 'footer.php'; ?>