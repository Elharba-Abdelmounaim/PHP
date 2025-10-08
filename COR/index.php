<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'authentification</title>
    <link rel="stylesheet" href="output.css">

</head>
<body>

<div class="bg-gray-100 flex items-center justify-center min-h-screen ">
    <div class="bg-while shadow-lg rounded-2xl p-8" >
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Connexion</h2>
    

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
                header("Location: welcome.php?login=" . urlencode($login));
                exit();
            } else {
                echo "<p class='text-red-500 mb-4'>Login ou mot de passe incorrect.</p>";
            }
        }
    ?>

    <form method="POST" action="index.php" class="space-y-4">
        <div>
            <label for="login" class="block text-gray-600 font-medium">Login</label>
            <input type="text" name="login" class="w-full rounded-lg p-2 ">
        </div>
        <div>
            <label for="password" class="block text-gray-600 font-medium"> Password</label>
            <input type="password" name="password" class="w-full rounded-lg p-2">
        </div>

        <button class="w-full bg-blue-600 text-white rounded-lg py-2 hover:bg-blue-700 ">
        Se connecter
        </button>

    </form>
</div>
</div>
</body>
</html>
