<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<section class="bg-black py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold text-white mb-12">
            Customer <span class="text-yellow-500">Testimonials</span>
        </h1>

        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $reviews = [
                "An unforgettable fragrance experience.",
                "Elegant, long-lasting, and truly luxurious.",
                "Essence has become my signature scent."
            ];
            foreach ($reviews as $review):
            ?>
                <div class="border border-yellow-500 p-6 rounded-xl">
                    <p class="text-gray-400 italic mb-4">
                        “<?= $review ?>”
                    </p>
                    <span class="text-yellow-500 font-semibold">
                        — Verified Customer
                    </span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
