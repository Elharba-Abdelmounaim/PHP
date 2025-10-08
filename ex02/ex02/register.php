<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
<link rel="stylesheet" href="dist/output.css">
</head>
<body class="bg-green-100 flex items-center justify-center min-h-screen">

<div class="bg-white shadow-lg rounded-2xl p-8 w-96">
    <h2 class="text-2xl font-bold mb-4 text-center">Créer un compte</h2>

    <form action="register.php" method="post" class="space-y-4">
        <input type="text" name="login" placeholder="Login" required class="w-full p-2 border rounded">
        <input type="password" name="password" placeholder="Mot de passe" required class="w-full p-2 border rounded">
        <button type="submit" name="register" class="bg-green-500 text-white px-4 py-2 rounded w-full">S'inscrire</button>
    </form>

    <p class="mt-4 text-center">
        Déjà un compte ?
        <a href="login.php" class="text-blue-500">Connectez-vous ici</a>
    </p>

    <?php
    if (isset($_POST['register'])) {
        $login = trim($_POST['login']);
        $password = trim($_POST['password']);
        $exists = false;

        // Vérifier si le login existe déjà
        if (file_exists("users.txt")) {
            $lines = file("users.txt", FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line) {
                list($user, $pass) = explode(":", $line);
                if ($user === $login) {
                    $exists = true;
                    break;
                }
            }
        }

        if ($exists) {
            echo "<p class='text-red-500 text-center mt-4'>Ce login existe déjà !</p>";
        } else {
            $file = fopen("users.txt", "a");
            fwrite($file, "$login:$password\n");
            fclose($file);
            echo "<p class='text-green-500 text-center mt-4'>Inscription réussie ! <a href='login.php' class='text-blue-500'>Connectez-vous</a></p>";
        }
    }
    ?>
</div>

</body>
</html>
