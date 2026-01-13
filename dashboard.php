<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!-- HERO SECTION -->
<section class="bg-black py-24">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- Text -->
        <div class="fade-in">
            <h1 class="text-5xl font-bold mb-6">
                Luxury <span class="text-yellow-500">Fragrances</span><br>
                Made to Impress
            </h1>
            <p class="text-gray-400 mb-8">
                Discover premium scents crafted for every personality and occasion.
            </p>
            <a href="products.php"
               class="inline-block px-8 py-3 border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-black transition rounded-full">
                View Products
            </a>
        </div>

        <!-- Image -->
        <div class="fade-in">
            <img src="assets/images/products/lifestyle/hero.png"
                 class="rounded-2xl border border-yellow-500 shadow-lg">
        </div>

    </div>
</section>



<!-- WHY ESSENCE -->
<section class="bg-black py-24 border-t border-yellow-500">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <!-- Image / Visual -->
        <div class="fade-in">
            <img src="assets/images/products/lifestyle/brand.png"
                 class="rounded-2xl border border-yellow-500 shadow-lg">
        </div>

        <!-- Text Content -->
        <div>
            <h2 class="text-4xl font-bold text-white mb-4">
                Why <span class="text-yellow-500">Shines Secret</span>
            </h2>

            <p class="text-gray-400 mb-6 leading-relaxed">
                Essence is built on the philosophy that fragrance is more than a scent —
                it is an identity. Each product is carefully curated to reflect elegance,
                confidence, and timeless luxury.
            </p>

            <ul class="space-y-4 mb-8">
                <li class="flex items-start gap-3">
                    <span class="text-yellow-500 text-xl">✦</span>
                    <p class="text-gray-300">Premium-quality ingredients sourced globally</p>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-yellow-500 text-xl">✦</span>
                    <p class="text-gray-300">Crafted for long-lasting impressions</p>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-yellow-500 text-xl">✦</span>
                    <p class="text-gray-300">Designed to suit every personality and occasion</p>
                </li>
            </ul>

            <a href="about.php"
               class="inline-block border border-yellow-500 text-yellow-500 px-8 py-3 rounded-lg hover:bg-yellow-500 hover:text-black transition font-semibold">
                Learn More
            </a>
        </div>

    </div>
</section>


<!-- SERVICES -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center text-white mb-12">
            Our <span class="text-yellow-500">Services</span>
        </h2>

        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <?php
            $services = ["Recommendations", "Gifting", "Refills", "Returns"];
            foreach ($services as $service):
            ?>
                <div class="bg-black border border-yellow-500 p-6 rounded-xl hover:scale-105 transition">
                    <h3 class="font-semibold text-lg text-yellow-500 mb-2"><?= $service ?></h3>
                    <p class="text-gray-400 text-sm">Premium experience guaranteed.</p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- PRODUCTS -->
<section class="bg-black py-24">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold">
                Our <span class="text-yellow-500">Sizes & Prices</span>
            </h2>
            <p class="text-gray-400 mt-4">
                Choose the perfect size that suits your lifestyle
            </p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Product Card -->
            <div class="group">
                <div class="relative overflow-hidden rounded-2xl border border-yellow-500 glow-hover">
                    <img src="assets/images/products/sizes/13ml.png"
                         class="w-full h-[320px] object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 flex flex-col justify-end p-6">
                        <h3 class="text-xl font-semibold">13ml</h3>
                        <p class="text-yellow-500 font-bold text-lg mt-1">RM 16</p>
                    </div>
                </div>
            </div>

            <div class="group">
                <div class="relative overflow-hidden rounded-2xl border border-yellow-500 glow-hover">
                    <img src="assets/images/products/sizes/16ml.png"
                         class="w-full h-[320px] object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 flex flex-col justify-end p-6">
                        <h3 class="text-xl font-semibold">16ml</h3>
                        <p class="text-yellow-500 font-bold text-lg mt-1">RM 21</p>
                    </div>
                </div>
            </div>

            <div class="group">
                <div class="relative overflow-hidden rounded-2xl border border-yellow-500 glow-hover">
                    <img src="assets/images/products/sizes/30ml.png"
                         class="w-full h-[320px] object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 flex flex-col justify-end p-6">
                        <h3 class="text-xl font-semibold">30ml</h3>
                        <p class="text-yellow-500 font-bold text-lg mt-1">RM 36</p>
                    </div>
                </div>
            </div>

            <div class="group">
                <div class="relative overflow-hidden rounded-2xl border border-yellow-500 glow-hover">
                    <img src="assets/images/products/sizes/50ml.png"
                         class="w-full h-[320px] object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 flex flex-col justify-end p-6">
                        <h3 class="text-xl font-semibold">50ml</h3>
                        <p class="text-yellow-500 font-bold text-lg mt-1">RM 56</p>
                    </div>
                </div>
            </div>

            <div class="group">
                <div class="relative overflow-hidden rounded-2xl border border-yellow-500 glow-hover">
                    <img src="assets/images/products/sizes/100ml.png"
                         class="w-full h-[320px] object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-black/50 flex flex-col justify-end p-6">
                        <h3 class="text-xl font-semibold">100ml</h3>
                        <p class="text-yellow-500 font-bold text-lg mt-1">RM 99</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<?php include 'includes/footer.php'; ?>
