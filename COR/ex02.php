<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'authentification</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="">
        <h2 class="">
            Connexion
        </h2>

        <?php
            $utilisateurs=[
                ['login' => 'user1' , 'password' => 'pass1'],
                ['login' => 'user2' , 'password' => 'pass2'],
                ['login' => 'admin', 'password' => 'admin']
            ];

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $login = $_POST['login'];
                $pass = $_POST['password'];

                $aut = false;

                foreach($utilisateurs as $user){
                    if($user['login'] === $login && $user['password'] === $pass){
                        $aut = true;
                        break;
                    }
                }

                if ($aut) {
                    header("Location:welcome.php?login=" .urlencode($login));
                    exit();
                } else {
                    echo "<p class='text-red-500'>Login ou mot de passe incorrect.</p>";
                }

            }
        ?>

        <!-- Formulaire HTML -->
        <form method="POST" action="index.php" class="space-y-4">
            <div>
                <label for="login" class="block text-gray-600 font-medium">Login</label>
                <input type="text" id="login" name="login" 
                       class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500"
                       required>
            </div>

            <div>
                <label for="password" class="block text-gray-600 font-medium">Mot de passe</label>
                <input type="password" id="password" name="password" 
                       class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500"
                       required>
            </div>

            <button type="submit" 
                    class="w-full bg-blue-600 text-white rounded-lg py-2 hover:bg-blue-700 transition">
                Se connecter
            </button>
        </form>
    </div>

</body>
</html>
