<header class="bg-white shadow-sm sticky top-0 z-40">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex justify-between items-center h-20">
      <!-- Logo -->
      <a href="home.php" class="flex items-center gap-3">
        <img src="img/magentaLogo.png" alt="2GO Logo" class="h-8 w-auto object-contain">
      </a>

      <!-- Desktop Nav -->
      <nav class="hidden md:flex space-x-8 font-medium">
        <a href="home.php" class="<?= basename($_SERVER['PHP_SELF']) == 'home.php' ? 'text-pink-600 font-bold' : 'text-gray-700 hover:text-pink-600' ?>">Home</a>
        <a href="accommodation.php" class="<?= basename($_SERVER['PHP_SELF']) == 'accommodation.php' ? 'text-pink-600 font-bold' : 'text-gray-700 hover:text-pink-600' ?>">Accommodation</a>
        <a href="outlets.php" class="<?= basename($_SERVER['PHP_SELF']) == 'outlets.php' ? 'text-pink-600 font-bold' : 'text-gray-700 hover:text-pink-600' ?>">Outlets</a>
        <a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'text-pink-600 font-bold' : 'text-gray-700 hover:text-pink-600'?>">Contact Us</a>
        <a href="faqs.php" class="<?= basename($_SERVER['PHP_SELF']) == 'faqs.php' ? 'text-pink-600 font-bold' : 'text-gray-700 hover:text-pink-600'?>">FAQs</a>
      </nav>

      <!-- Mobile Hamburger -->
      <div class="md:hidden">
        <button id="menu-btn" aria-label="Toggle Menu" class="text-gray-800 focus:outline-none text-2xl">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
    <div class="px-4 py-6 space-y-4 flex flex-col items-center font-medium">
      <a href="home.php">Home</a>
      <a href="accommodation.php">Accommodation</a>
      <a href="outlets.php">Outlets</a>
      <a href="contact.php">Contact Us</a>
      <a href="faqs.php">FAQs</a>
    </div>
  </div>

  <script>
    document.getElementById("menu-btn").addEventListener("click", () => {
      document.getElementById("mobile-menu").classList.toggle("hidden");
    });
  </script>
</header>
