<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<section class="bg-black text-white py-24">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Hero -->
        <div class="text-center mb-20">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                About <span class="text-yellow-500">Essence</span>
            </h1>
            <p class="text-gray-400 max-w-3xl mx-auto">
                Luxury fragrances crafted with passion, precision, and purpose.
            </p>
        </div>

        <!-- Story Section -->
        <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
            <div>
                <h2 class="text-3xl font-semibold mb-4 text-yellow-500">
                    Our Story
                </h2>
                <p class="text-gray-400 leading-relaxed">
                    Essence was founded with a simple belief — fragrance is more than a scent,
                    it is an identity. Each bottle is designed to capture emotion, elegance,
                    and individuality.
                </p>
            </div>
            <div class="rounded-2xl overflow-hidden border border-yellow-500">
                <img src="assets/images/about-image.jpg" alt="About Essence"
                     class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Values -->
        <div class="grid md:grid-cols-3 gap-10 mb-24">
            <div class="p-8 border border-yellow-500 rounded-xl text-center">
                <h3 class="text-xl font-semibold mb-2 text-yellow-500">Quality</h3>
                <p class="text-gray-400">
                    Only premium ingredients and long-lasting formulations.
                </p>
            </div>

            <div class="p-8 border border-yellow-500 rounded-xl text-center">
                <h3 class="text-xl font-semibold mb-2 text-yellow-500">Elegance</h3>
                <p class="text-gray-400">
                    Designed for those who appreciate timeless luxury.
                </p>
            </div>

            <div class="p-8 border border-yellow-500 rounded-xl text-center">
                <h3 class="text-xl font-semibold mb-2 text-yellow-500">Trust</h3>
                <p class="text-gray-400">
                    A brand built on authenticity and customer satisfaction.
                </p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center">
            <a href="products.php"
               class="inline-block bg-yellow-500 text-black px-8 py-3 rounded-full font-semibold hover:bg-yellow-400 transition">
                Explore Our Products
            </a>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
