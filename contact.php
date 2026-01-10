<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<section class="bg-black py-24">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Title -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-4">
                Contact <span class="text-yellow-500">Us</span>
            </h1>
            <p class="text-gray-400">
                Visit us or get in touch using the details below
            </p>
        </div>

        <!-- Content Grid -->
        <div class="grid md:grid-cols-2 gap-12 items-start">

            <!-- Contact Info -->
            <div class="space-y-6 text-gray-400">
                <p>
                    <span class="text-yellow-500 font-semibold">Phone:</span><br>
                    (+60) 12-345 6789
                </p>

                <p>
                    <span class="text-yellow-500 font-semibold">Email:</span><br>
                    info@essence.com
                </p>

                <p>
                    <span class="text-yellow-500 font-semibold">Address:</span><br>
                    8V47+3QV, Sibu, Sarawak
                </p>

                <p class="text-sm">
                    Our store is conveniently located near Star Mega Mall, making it
                    easy for customers to visit and explore our fragrance collection.
                </p>
            </div>

            <!-- Google Map -->
            <div class="w-full h-[350px] md:h-[400px] rounded-2xl overflow-hidden border border-yellow-500">
                <iframe
                    src="https://www.google.com/maps?q=8V47%2B3QV%20Sibu%2C%20Sarawak&output=embed"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
