<?php
    $produits = [
        'Électronique' => [
            ['titre' => 'Smartphone', 'image' => 'produit1.jpeg', 'description' => 'Un smartphone dernier cri avec écran OLED.', 'prix' => 699],
            ['titre' => 'Tablette', 'image' => 'produit1.jpeg', 'description' => 'Une tablette légère et rapide.', 'prix' => 499],
            ['titre' => 'Casque Bluetooth', 'image' => 'produit1.jpeg', 'description' => 'Un casque sans fil avec réduction de bruit.', 'prix' => 199]
        ],
        'Vêtements' => [
            ['titre' => 'T-shirt', 'image' => 'produit1.jpeg', 'description' => 'T-shirt 100% coton.', 'prix' => 25],
            ['titre' => 'Jeans', 'image' => 'produit1.jpeg', 'description' => 'Jean slim fit.', 'prix' => 45],
            ['titre' => 'Veste', 'image' => 'produit1.jpeg', 'description' => 'Veste en cuir.', 'prix' => 120]
        ],
        'Maison' => [
            ['titre' => 'Canapé', 'image' => 'produit1.jpeg', 'description' => 'Canapé 3 places confortable.', 'prix' => 799],
            ['titre' => 'Lampe', 'image' => 'produit1.jpeg', 'description' => 'Lampe LED moderne.', 'prix' => 59],
            ['titre' => 'Table basse', 'image' => 'produit1.jpeg', 'description' => 'Table basse en verre.', 'prix' => 149]
        ]
    ];
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 20px;
        }
        .cat {
            margin-bottom: 40px;
        }
        .cat h2 {
            border-bottom: 5px solid #ddd;
            padding-bottom: 10px;
        }
        .produits {
            display: flex;
            gap: 100px;
        }
        .pro {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            width: 300px;
            text-align: center;
        }
        .pro img {
            max-width: 100%;
            height: auto;
        }
        .prix {
            font-weight: bold;
            color: #e44d26;
            font-size: 1.2em;
        }
        .btn-ajouter {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            margin: 10px 2px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Catalogue de Produits</h1>

    

<?php
    foreach ($produits as $cat => $pro_list) {
        echo "<div class='cat'>";
            echo "<h2>$cat </h2>";


            echo "<div class='produits'>";
            
                foreach ($pro_list as $pro) {
                    echo "<div class='pro'>";
                    echo "<img src='{$pro['image']}' alt='{$pro['titre']}'>";
                    echo "<h3>{$pro['titre']}</h3>";
                    echo "<p>{$pro['description']}</p>";
                    echo "<p class='prix'>{$pro['prix']} €</p>";
                    echo "<button class='btn-ajouter'>Ajouter au panier</button>";
                    echo "</div>";
                }
            
            echo "</div>";
        echo "</div>";
    }
    ?>
</body>
</html>