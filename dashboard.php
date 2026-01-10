<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!-- HERO SECTION -->
<section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
    <div>
        <h1 class="text-5xl font-bold mb-6">We Care About Fragrances</h1>
        <p class="text-gray-600 mb-8">
            Discover luxury scents crafted with passion and precision.
        </p>
        <a href="#" class="bg-pink-600 text-white px-6 py-3 rounded-lg hover:bg-pink-700">
            See More
        </a>
    </div>

    <div class="h-80 bg-gray-200 rounded-xl flex items-center justify-center">
        <span class="text-gray-500">Hero Image</span>
    </div>
</section>

<!-- WHY ESSENCE -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-10 items-center">
        <div class="text-center">
            <h2 class="text-4xl font-bold">Essence</h2>
            <p class="mt-2 text-gray-500">Luxury Defined. One Drop at a Time.</p>
        </div>

        <div class="h-64 bg-gray-200 rounded-xl"></div>

        <div>
            <h3 class="text-2xl font-semibold mb-4">Why Shop With Us</h3>
            <p class="text-gray-600 mb-6">
                Premium fragrances, exceptional quality, and timeless elegance.
            </p>
            <a href="#" class="text-pink-600 font-medium hover:underline">Read More</a>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="max-w-7xl mx-auto px-6 py-20">
    <h2 class="text-4xl font-bold text-center mb-12">Our Services</h2>

    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-semibold text-lg mb-2">Recommendations</h3>
            <p class="text-gray-600 text-sm">Personalized scent guidance.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-semibold text-lg mb-2">Gifting</h3>
            <p class="text-gray-600 text-sm">Elegant gift options.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-semibold text-lg mb-2">Refills</h3>
            <p class="text-gray-600 text-sm">Sustainable refilling service.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="font-semibold text-lg mb-2">Returns</h3>
            <p class="text-gray-600 text-sm">Hassle-free returns.</p>
        </div>
    </div>
</section>

<!-- PRODUCTS -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-4">Our Products</h2>
        <p class="text-gray-600 mb-10">Explore our curated fragrance collection</p>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            <?php for ($i = 1; $i <= 6; $i++): ?>
                <div class="h-48 bg-gray-200 rounded-xl"></div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
