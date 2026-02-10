<!DOCTYPE html>
<html>
<head>
    <script src="https://unpkg.com/heroicons@2.0.18/dist/heroicons.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<?php require "../app/views/partials/navbar.php"; ?>
<div class="w-full">
  <div class="flex justify-center h-64 items-center"
       style="background-image: url('assets/images/vehicles/fond.webp'); background-size: cover; background-position: center;">
    <h3 class="text-4xl font-bold text-white text-center 
               bg-black/30 p-4 rounded">
      LOUEZ HAUT DE GAMME A PRIX ATTRACTIF.
    </h3>
  </div>
</div>
<div class="w-full px-4">
  <div class="flex justify-center items-center space-x-10 max-w-6xl mx-auto h-64">
        <div class="">
            <div class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                    <path d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477ZM21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" />
                </svg>

                <span class="text-lg font-bold ">Portée mondiale</span>
            </div>
            <div class="text-2xl ">Plus de 2 000 stations SIXT dans plus de 105 pays</div>
            
        </div>
        <div class="">
            <div class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                    <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 1 1 6 0h3a.75.75 0 0 0 .75-.75V15Z" />
                    <path d="M8.25 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0ZM15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75Z" />
                    <path d="M19.5 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>


                <span class="text-lg font-bold ">Flotte unique</span>
            </div>
            <div class="text-2xl ">Des cabriolets haut de gamme aux SUV premium</div>
            
        </div>
        <div class="">
            <div class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
                </svg>

                <span class="text-lg font-bold ">Service remarquable</span>
            </div>
            <div class="text-2xl ">Sans stress, fiable, sans coûts cachés</div>
            
        </div>
    
  </div>
</div>

        
    <div class="max-w-7xl mx-auto px-4 mt-6">
        <div class="grid grid-cols-2 gap-4">
            <?php foreach($vehicles as $v): ?>
            <div class="w-full bg-white p-4 rounded-2xl shadow-sm">
                <div class="flex justify-between py-3 mb-4">
                    <h2 class="font-bold text-2xl text-gray-700"><?= $v['name'] ?></h2>
                    <p><?= $v['price_per_day'] ?> $ / jour</p>
                </div>
                <img src="<?= htmlspecialchars($v['image']) ?>" 
                alt="<?= htmlspecialchars($v['name']) ?>" 
                class="w-full h-80 object-cover rounded mb-3">

                <form method="post" action="index.php?page=cart-add">
                    <input type="hidden" name="vehicle_id" value="<?= $v['id'] ?>">
                    <input type="number" name="days" class="border p-1 w-full" required placeholder="Jours">
                    <button class="bg-green-500 text-white px-3 py-1 mt-2 rounded">
                        Réserver
                    </button>
                </form>
            </div>
            <?php endforeach; ?>
        </div>
    </div>


<section class="max-w-7xl mx-auto px-4 my-16">
  <h2 class="text-5xl font-bold text-center mb-10 text-gray-800">NOS SERVICES</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    
    <!-- Carte 1 : Location courte durée -->
    <div class="relative rounded-lg overflow-hidden shadow-lg h-80">
      <img src="assets/images/services/v8.jpg" class="w-full h-full object-cover" alt="Location courte durée">
      <!-- Overlay -->
      <div class="absolute inset-0 bg-black/50 flex flex-col justify-center items-center text-center px-4">
        <h3 class="text-xl font-bold text-white mb-2">Location courte durée</h3>
        <p class="text-white mb-4">Louez nos véhicules haut de gamme pour quelques heures ou quelques jours à prix attractif, avec une réservation simple et rapide.</p>
        <a href="index.php?page=vehicles" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">En savoir plus</a>
      </div>
    </div>

    <!-- Carte 2 : Location longue durée -->
    <div class="relative rounded-lg overflow-hidden shadow-lg h-80">
      <img src="assets/images/services/v9.jpg" class="w-full h-full object-cover" alt="Location longue durée">
      <div class="absolute inset-0 bg-black/50 flex flex-col justify-center items-center text-center px-4">
        <h3 class="text-xl font-bold text-white mb-2">Location longue durée</h3>
        <p class="text-white mb-4">Pour les entreprises ou les particuliers souhaitant louer un véhicule sur plusieurs semaines ou mois, avec des tarifs préférentiels et un service complet.</p>
        <a href="index.php?page=vehicles" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">En savoir plus</a>
      </div>
    </div>

    <!-- Carte 3 : Services premium -->
    <div class="relative rounded-lg overflow-hidden shadow-lg h-80">
      <img src="assets/images/services/v9.jpg" class="w-full h-full object-cover" alt="Services premium">
      <div class="absolute inset-0 bg-black/50 flex flex-col justify-center items-center text-center px-4">
        <h3 class="text-xl font-bold text-white mb-2">Services premium</h3>
        <p class="text-white mb-4">Profitez d’options exclusives : chauffeur, livraison du véhicule à domicile, assurance complète, et véhicules de luxe pour toutes occasions.</p>
        <a href="index.php?page=contact" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">En savoir plus</a>
      </div>
    </div>

  </div>
</section>

    <footer class="bg-gray-800 text-gray-200 mt-10">
  <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">

    <!-- Logo / Nom du site -->
    <div class="flex flex-col space-y-3">
      <h2 class="text-2xl font-bold text-white">RentCar</h2>
      <p>Location de véhicules haut de gamme à prix attractif.</p>
      <p>Contact : contact@rentcar.com</p>
      <p>Tél : +243 99 123 4567</p>
    </div>

    <!-- Liens utiles -->
    <div class="flex flex-col space-y-2">
      <h3 class="font-semibold text-white mb-2">Liens utiles</h3>
      <a href="index.php?page=vehicles" class="hover:text-blue-400">Véhicules</a>
      <a href="index.php?page=cart" class="hover:text-blue-400">Panier</a>
      <a href="index.php?page=login" class="hover:text-blue-400">Connexion</a>
      <a href="index.php?page=register" class="hover:text-blue-400">Inscription</a>
      <a href="index.php?page=contact" class="hover:text-blue-400">Contact</a>
    </div>

    <!-- Réseaux sociaux -->
    <div class="flex flex-col space-y-3">
      <h3 class="font-semibold text-white mb-2">Suivez-nous</h3>
      <div class="flex space-x-4">
        <a href="#" class="hover:text-blue-500" aria-label="Facebook">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M22.675 0h-21.35C.597 0 0 .597 0 1.326v21.348C0 23.403.597 24 1.326 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.794.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.31h3.587l-.467 3.622h-3.12V24h6.116c.729 0 1.326-.597 1.326-1.326V1.326C24 .597 23.403 0 22.675 0z"/>
          </svg>
        </a>
        <a href="#" class="hover:text-blue-400" aria-label="Twitter">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M24 4.557a9.835 9.835 0 01-2.828.775 4.932 4.932 0 002.165-2.724c-.951.555-2.005.959-3.127 1.184a4.916 4.916 0 00-8.384 4.482A13.957 13.957 0 011.671 3.149a4.916 4.916 0 001.523 6.574 4.9 4.9 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.085 4.918 4.918 0 004.596 3.417 9.867 9.867 0 01-6.102 2.104c-.395 0-.787-.023-1.175-.068a13.945 13.945 0 007.557 2.212c9.054 0 14.004-7.496 14.004-13.986 0-.21-.005-.423-.014-.634A10.012 10.012 0 0024 4.557z"/>
          </svg>
        </a>
        <a href="#" class="hover:text-pink-500" aria-label="Instagram">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.056 1.977.24 2.435.403a4.918 4.918 0 011.768 1.042 4.918 4.918 0 011.042 1.768c.163.458.347 1.265.403 2.435.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.17-.24 1.977-.403 2.435a4.918 4.918 0 01-1.042 1.768 4.918 4.918 0 01-1.768 1.042c-.458.163-1.265.347-2.435.403-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.977-.24-2.435-.403a4.918 4.918 0 01-1.768-1.042 4.918 4.918 0 01-1.042-1.768c-.163-.458-.347-1.265-.403-2.435C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.85c.056-1.17.24-1.977.403-2.435a4.918 4.918 0 011.042-1.768 4.918 4.918 0 011.768-1.042c.458-.163 1.265-.347 2.435-.403C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.332.012 7.052.07 5.77.127 4.768.313 4.042.607a6.918 6.918 0 00-2.504 1.634 6.918 6.918 0 00-1.634 2.504C-.313 5.768-.127 6.77-.07 8.052.012 9.332 0 9.741 0 12c0 2.259.012 2.668.07 3.948.057 1.282.242 2.284.607 3.01a6.918 6.918 0 001.634 2.504 6.918 6.918 0 002.504 1.634c.726.365 1.728.55 3.01.607 1.28.058 1.689.07 3.948.07s2.668-.012 3.948-.07c1.282-.057 2.284-.242 3.01-.607a6.918 6.918 0 002.504-1.634 6.918 6.918 0 001.634-2.504c.365-.726.55-1.728.607-3.01.058-1.28.07-1.689.07-3.948s-.012-2.668-.07-3.948c-.057-1.282-.242-2.284-.607-3.01a6.918 6.918 0 00-1.634-2.504A6.918 6.918 0 0019.01.607c-.726-.365-1.728-.55-3.01-.607C14.668.012 14.259 0 12 0z"/>
            <path d="M12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998z"/>
            <circle cx="18.406" cy="5.594" r="1.44"/>
          </svg>
        </a>
      </div>
    </div>

  </div>

  <!-- Bas du footer -->
  <div class="border-t border-gray-700 mt-6 py-4 text-center text-gray-400 text-sm">
    &copy; <?= date("Y") ?> RentCar. Tous droits réservés.
  </div>
</footer>

</body>
</html>
