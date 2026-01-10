<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!-- HERO SECTION -->
<section class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-12 items-center">
    <div>
        <h1 class="text-5xl font-bold text-white mb-6">
            We Care About <span class="text-yellow-500">Fragrances</span>
        </h1>
        <p class="text-gray-400 mb-8">
            Luxury scents crafted for elegance and confidence.
        </p>
        <a href="#"
           class="bg-yellow-500 text-black px-8 py-3 rounded-lg font-semibold hover:bg-yellow-600 transition">
            See More
        </a>
    </div>

    <div class="h-80 bg-gray-800 rounded-xl flex items-center justify-center">
        <span class="text-gray-500">Hero Image</span>
    </div>
</section>


<!-- WHY ESSENCE -->
<section class="bg-black py-24 border-t border-yellow-500">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <!-- Image / Visual -->
        <div class="h-96 bg-gray-900 rounded-2xl flex items-center justify-center">
            <span class="text-gray-600">Brand Image</span>
        </div>

        <!-- Text Content -->
        <div>
            <h2 class="text-4xl font-bold text-white mb-4">
                Why <span class="text-yellow-500">Essence</span>
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

            <a href="#"
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
<section class="bg-gray-900 py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <h2 class="text-4xl font-bold text-white mb-4">
            Our <span class="text-yellow-500">Products</span>
        </h2>
        <p class="text-gray-400 mb-12">
            Explore our signature collection of luxury fragrances
        </p>

        <!-- Category Filter (Display Only) -->
        <ul class="flex justify-center gap-8 mb-14 text-sm uppercase tracking-wider">
            <li class="text-yellow-500 border-b border-yellow-500 pb-1">All</li>
            <li class="text-gray-400 hover:text-yellow-500 cursor-pointer">Floral</li>
            <li class="text-gray-400 hover:text-yellow-500 cursor-pointer">Woody</li>
            <li class="text-gray-400 hover:text-yellow-500 cursor-pointer">Fresh</li>
            <li class="text-gray-400 hover:text-yellow-500 cursor-pointer">Fruity</li>
        </ul>

        <!-- Product Grid -->
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-10">
            <?php for ($i = 1; $i <= 6; $i++): ?>
                <div class="bg-black border border-yellow-500 rounded-2xl overflow-hidden hover:scale-105 transition">

                    <div class="h-56 bg-gray-800 flex items-center justify-center">
                        <span class="text-gray-600">Product Image</span>
                    </div>

                    <div class="p-6 text-left">
                        <h3 class="text-lg font-semibold text-white mb-2">
                            Essence No. <?= $i ?>
                        </h3>
                        <p class="text-gray-400 text-sm mb-4">
                            A refined fragrance crafted for elegance.
                        </p>

                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-bold">RM 149.00</span>
                            <a href="#"
                               class="text-sm text-yellow-500 hover:underline">
                                View
                            </a>
                        </div>
                    </div>

                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>
