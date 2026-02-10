<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon panier</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<?php require "../app/views/partials/navbar.php"; ?>

<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded shadow">

    <h2 class="text-2xl font-bold mb-4">Mes réservations</h2>

    <?php if(empty($items)): ?>
        <p class="text-gray-500">Réservation vide.</p>
    <?php else: ?>

    <table class="w-full border">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2 text-left">Véhicule</th>
                <th class="p-2">Prix / jour</th>
                <th class="p-2">Jours</th>
                <th class="p-2">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $grandTotal = 0; ?>
            <?php foreach($items as $item): ?>
                <?php $grandTotal += $item['total']; ?>
                <tr class="border-t">
                    <td class="p-2"><?= htmlspecialchars($item['name']) ?></td>
                    <td class="p-2 text-center"><?= $item['price_per_day'] ?> $</td>
                    <td class="p-2 text-center"><?= $item['days'] ?></td>
                    <td class="p-2 text-center font-bold"><?= $item['total'] ?> $</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-right mt-4 text-xl font-bold mb-6">
        Total général : <?= $grandTotal ?> $
    </div>

    <div class="text-right mt-4">
        <a href="#" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
            Valider la location
        </a>
    </div>

    <?php endif; ?>

</div>

</body>
</html>
