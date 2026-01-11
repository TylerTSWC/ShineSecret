<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<section class="bg-black py-24">
    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-16">
            <h1 class="text-4xl font-bold text-white">
                Our <span class="text-yellow-500">Products</span>
            </h1>
            <p class="text-gray-400 mt-2">
                Crafted for elegance and lasting impressions
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

            <!-- Product Card -->
            <div class="group bg-zinc-900 rounded-2xl overflow-hidden border border-zinc-800 hover:border-yellow-500 transition">
                <div class="relative overflow-hidden">
                    <img src="assets/images/products/perfume1.jpg"
                         class="w-full h-72 object-cover group-hover:scale-110 transition duration-500"
                         alt="Perfume">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <button class="bg-yellow-500 text-black px-6 py-2 rounded-full font-semibold">
                            View Details
                        </button>
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="text-lg font-semibold text-white">Golden Bloom</h3>
                    <p class="text-gray-400 text-sm mt-1">Floral · Elegant · Long-lasting</p>
                </div>
            </div>

            <!-- Copy card for more products -->

        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>
