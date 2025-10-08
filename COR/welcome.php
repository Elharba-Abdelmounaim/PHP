<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="output.css">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-2xl text-center">
        <?php
            if(isset($_GET['login'])){
                $login = htmlspecialchars($_GET['login']);
                echo "<h1 class='text-2xl font-bold text-green-600 mb-4'>Bienvenue, $login ! </h1>";
            } else {
                echo "<h1 class='text-red-500'>Aucun utilisateur connecté.</h1>";
            }
        ?>
        <a href="index.php" class=" bg-red-500 hover:bg-red-700  text-white block  ">Se déconnecter</a>
    </div>

</body>
</html>
