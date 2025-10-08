<?php
session_start();


$produits = [
    1 => [
        'type' => 'shoes',
        'name' => 'Running Shoes',
        'description' => 'Comfortable and lightweight running shoes, perfect for running and everyday activities.',
        'price' => '89.99',
        'image' => 'produit1.jpeg'
    ],
    2 => [
        'type' => 'watch',
        'name' => 'Smartwatch',
        'description' => 'Smartwatch with health tracking, notifications, and color touchscreen.',
        'price' => '199.99',
        'image' => 'produit2.jpeg'
    ],
    3 => [
        'type' => 'bag',
        'name' => 'Backpack',
        'description' => 'Practical backpack with multiple pockets and a modern style.',
        'price' => '59.99',
        'image' => 'produit3.jpeg'
    ]
];


if (isset($_GET['next'])) {
    if (!isset($_SESSION['produit_id'])) {
        $_SESSION['produit_id'] = 3;
    } else {
        $_SESSION['produit_id']++;
        if ($_SESSION['produit_id'] > count($produits)) {
            $_SESSION['produit_id'] = 1;
        }
    }
}



$produit_id = $_SESSION['produit_id'];
$produit = $produits[$produit_id];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte de Produit Dynamique</title>
    <style>
        body {
            background: black;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }



        
        .container {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            width: 100%;
            max-width: 350px;
 
        }

        .produit-image img {
            width: 100%;
            height: 250px;
            object-fit: cover;

        }

        .produit-info {
             padding: 25px;
             text-align: center; }
        .produit-nom { f
            font-size: 24px;  
            font-weight: bold; 
            margin: 0 0 15px; }
        .produit-description {
             color: #666; 
            line-height: 1.6;
             margin: 0 0 20px;
             font-size: 14px; }
        .produit-prix { font-size: 28px;
             font-weight: bold; 
             color: #e74c3c;
              margin: 0 0 20px; }

        .btn-acheter {
            background: linear-gradient(45deg, #3498db, #2980b9);
            color: white;
   
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 16px;

            cursor: pointer;
           
        }

        .changer-produit {
           
            padding: 10px 20px;
            background: #95a5a6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container <?php echo $produit['type']; ?>">
        <div class="produit-image">
            <img src="<?php echo $produit['image']; ?>" alt="<?php echo $produit['name']; ?>">
        </div>
        <div class="produit-info">
            <h2 class="produit-nom"><?php echo $produit['name']; ?></h2>
            <p class="produit-description"><?php echo $produit['description']; ?></p>
            <p class="produit-prix"><?php echo $produit['price']; ?> €</p>
            <button class="btn-acheter">Ajouter au panier</button>
        </div>

        <a class="changer-produit" href="?next=1">Changer de produit</a>
    </div>
</body>
</html>
