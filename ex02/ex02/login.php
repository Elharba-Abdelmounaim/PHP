<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/output.css">
    <title>Document</title>
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen">       
     <div class="bg-white shadow-lg rounded-2xl p-8 w-96">
        <h1 class="text-2xl font-bold text-center">Se connecter</h1>
        <form action="login.php" method="post" class="space-y-4">
            <input type="text" name="login" id="" placeholder="Login" class="w-full p-2 border rounded">
            <input type="password" name="pass" id="" placeholder="Mot de passe" class="w-full p-2 border rounded">
            <button type="submit" name="send" class="bg-blue-500 text-white px-4 py-2 rounded "> Se connecter</button>
            <a href="register.php"class="bg-green-500 text-white px-4 py-3 rounded " >S'inscrire </a>
        </form>
        <?php
            if(isset($_POST['send'])){
                $login = $_POST['login'];
                $password =$_POST['pass'];
                $fount = false;

                if(file_exists("user.txt")){
                    $file = fopen("user.txt", "r");
                    while(($line = fgets($file)) != false){
                        list($user, $pass) = explode(":", trim($line));
                        
                        if ($login === $user && $pass === $password ){
                            $fount = true;
                            break;
                        }

                    }
                    fclose($file);

                }

                if ($fount){
                    header("Location: welcome.php?login=". urlencode($login));
                    exit;
                }else{
                    echo "<p class='text-red-500 text-center mt-4'>Login ou mot de passe incorrect</p>";
                }

            }

        
        ?>


    </div>
    
</body>
</html>