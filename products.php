<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<section class="bg-black py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold text-white mb-4">
            Our <span class="text-yellow-500">Products</span>
        </h1>
        <p class="text-gray-400 mb-12">
            A curated collection of luxury fragrances
        </p>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-10">
            <?php for ($i = 1; $i <= 6; $i++): ?>
                <div class="bg-black border border-yellow-500 rounded-2xl overflow-hidden">
                    <div class="h-56 bg-gray-800 flex items-center justify-center text-gray-600">
                        Product Image
                    </div>
                    <div class="p-6 text-left">
                        <h3 class="text-white font-semibold mb-2">
                            Essence No. <?= $i ?>
                        </h3>
                        <p class="text-gray-400 text-sm mb-4">
                            Crafted for elegance and confidence.
                        </p>
                        <span class="text-yellow-500 font-bold">RM 149.00</span>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
