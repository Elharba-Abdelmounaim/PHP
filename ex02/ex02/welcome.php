<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
<link rel="stylesheet" href="dist/output.css">
</head>
<body class="bg-green-100 flex items-center justify-center min-h-screen">

<div class="bg-white shadow-lg rounded-2xl p-8 text-center">
    <?php
    if (isset($_GET['login'])) {
        $login = htmlspecialchars($_GET['login']);
        echo "<h1 class='text-2xl font-bold text-green-500'>Bienvenue, $login !</h1>";
    } else {
        echo "<p class='text-red-500'>Accès refusé.</p>";
    }
    ?>
</div>

</body>
</html>
