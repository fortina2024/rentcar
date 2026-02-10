<nav class="bg-white">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between h-16 items-center">

      <!-- Logo -->
      <div class="flex items-center">
      <h2 class="text-2xl font-bold text-gray-800">RentCar</h2>
      </div>

      <!-- Menu desktop -->
      <div class="hidden md:flex space-x-6 items-center">

        <a href="index.php?page=vehicles"
           class="text-gray-700 hover:text-green-600">
          Véhicules
        </a>

        <?php if(isset($_SESSION['user'])): ?>

          <a href="index.php?page=cart"
             class="relative text-gray-700 hover:text-green-600">
             Réservation
            <span class="absolute -top-2 -right-3 bg-red-500 text-white text-xs px-1 rounded">
              🛒
            </span>
          </a>

          <a href="index.php?page=logout"
             class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
            Déconnexion
          </a>

        <?php else: ?>

          <a href="index.php?page=login"
             class="text-gray-700 hover:text-green-600">
            Connexion
          </a>

          <a href="index.php?page=register"
             class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Inscription
          </a>

        <?php endif; ?>
      </div>

      <!-- Bouton mobile -->
      <div class="md:hidden">
        <button id="menuBtn" class="text-gray-700 focus:outline-none">
          ☰
        </button>
      </div>

    </div>
  </div>

  <!-- Menu mobile -->
  <div id="mobileMenu" class="hidden md:hidden px-4 pb-4 space-y-2">

    <a href="index.php?page=vehicles" class="block text-gray-700">
      Véhicules
    </a>

    <?php if(isset($_SESSION['user'])): ?>

      <a href="index.php?page=cart" class="block text-gray-700">
        Réservation
      </a>

      <a href="index.php?page=logout"
         class="block bg-red-500 text-white px-4 py-2 rounded text-center">
        Déconnexion
      </a>

    <?php else: ?>

      <a href="index.php?page=login" class="block text-gray-700">
        Connexion
      </a>

      <a href="index.php?page=register"
         class="block bg-green-600 text-white px-4 py-2 rounded text-center">
        Inscription
      </a>

    <?php endif; ?>

  </div>
</nav>

<!-- JS menu mobile -->
<script>
  document.getElementById('menuBtn').addEventListener('click', function () {
    document.getElementById('mobileMenu').classList.toggle('hidden');
  });
</script>
