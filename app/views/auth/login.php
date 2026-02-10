<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<?php require "../app/views/partials/navbar.php"; ?>

<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4 text-center">Connexion</h2>

    <form method="POST">
        <input type="email" name="email" required
               placeholder="Email"
               class="w-full border p-2 mb-3 rounded">

        <input type="password" name="password" required
               placeholder="Mot de passe"
               class="w-full border p-2 mb-4 rounded">

        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
            Se connecter
        </button>
    </form>
</div>

</body>
</html>
