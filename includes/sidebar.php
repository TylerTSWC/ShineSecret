<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <h1 class="text-2xl font-bold tracking-wide">Essence</h1>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-8 font-medium">
            <li><a href="index.php" class="hover:text-pink-600">Home</a></li>
            <li><a href="#" class="hover:text-pink-600">Products</a></li>
            <li><a href="#" class="hover:text-pink-600">Services</a></li>
            <li><a href="#" class="hover:text-pink-600">Contact</a></li>
        </ul>

        <!-- Desktop Button -->
        <a href="#"
           class="hidden md:inline-block bg-pink-600 text-white px-5 py-2 rounded-full hover:bg-pink-700 transition">
            Order Now
        </a>

        <!-- Mobile Menu Button -->
        <button id="menuBtn" class="md:hidden focus:outline-none">
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

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t">
        <ul class="flex flex-col px-6 py-4 space-y-4 font-medium">
            <li><a href="index.php" class="hover:text-pink-600">Home</a></li>
            <li><a href="#" class="hover:text-pink-600">Products</a></li>
            <li><a href="#" class="hover:text-pink-600">Services</a></li>
            <li><a href="#" class="hover:text-pink-600">Contact</a></li>
            <li>
                <a href="#"
                   class="inline-block bg-pink-600 text-white px-5 py-2 rounded-full hover:bg-pink-700">
                    Order Now
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Mobile Menu Script -->
<script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
