<nav class="bg-black border-b border-yellow-500 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <h1 class="text-2xl font-bold tracking-widest text-yellow-500">
            Essence
        </h1>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-8 font-medium">
            <li><a href="dashboard.php" class="hover:text-yellow-500">Home</a></li>
            <li><a href="products.php" class="hover:text-yellow-500">Products</a></li>
            <li><a href="about.php" class="hover:text-yellow-500">About</a></li>
            <li><a href="testimonials.php" class="hover:text-yellow-500">Testimonials</a></li>
            <li><a href="contact.php" class="hover:text-yellow-500">Contact</a></li>
        </ul>


        <!-- Desktop Button -->
        <a href="#"
           class="hidden md:inline-block bg-yellow-500 text-black px-6 py-2 rounded-full font-semibold hover:bg-yellow-600 transition">
            Order Now
        </a>

        <!-- Mobile Button -->
        <button id="menuBtn" class="md:hidden text-yellow-500 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-7 w-7"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu (Animated) -->
    <div id="mobileMenu"
         class="overflow-hidden max-h-0 transition-all duration-300 ease-in-out bg-black border-t border-yellow-500">

        <ul class="flex flex-col px-6 py-6 space-y-5 font-medium">
            <li><a href="index.php" class="hover:text-yellow-500 transition">Home</a></li>
            <li><a href="#" class="hover:text-yellow-500 transition">Products</a></li>
            <li><a href="#" class="hover:text-yellow-500 transition">Services</a></li>
            <li><a href="#" class="hover:text-yellow-500 transition">Contact</a></li>
            <li>
                <a href="#"
                   class="inline-block bg-yellow-500 text-black px-6 py-2 rounded-full font-semibold hover:bg-yellow-600 transition">
                    Order Now
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', () => {
        if (mobileMenu.classList.contains('max-h-0')) {
            mobileMenu.classList.remove('max-h-0');
            mobileMenu.classList.add('max-h-screen');
        } else {
            mobileMenu.classList.add('max-h-0');
            mobileMenu.classList.remove('max-h-screen');
        }
    });
</script>
