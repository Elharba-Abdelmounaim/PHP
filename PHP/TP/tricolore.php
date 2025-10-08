<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
     <?php
    
    $numero = rand(1, 3); 
    

    if ($numero == 1) {
        $etat = "red";
    } elseif ($numero == 2) {
        $etat = "oronge";
    } else {
        $etat = "green";
    }
    ?>
    <style>
        body {

            display: flex;
            justify-content: center;
            align-items: center;

            margin: 0;
            background-color: #2c3e50;
        }

        .tricolore {
            width: 150px;
            height: 300px;
            background-color:#0000;
            border-radius: 15px;
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 10px 20px rgba(224, 224, 224, 0.3);
        }

        .lum {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 10px;
            opacity: 0.3;
        }

        .active {
            opacity: 1;
            box-shadow: 0 0 30px 10px rgba(156, 156, 156, 0.5);
        }

        .red {
            background-color: #e74c3c;
        }

        .oronge {
            background-color: #f39c12;
        }

        .green{
            background-color: #26ff81ff;
        }

        .info {
            text-align: center;
            color: white;
            margin-top: 30px;
            font-size: 18px;
        }

        .container {
            text-align: center;
        }

        button {
            padding: 10px 20px;
            font-size: 26px;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
        }


    </style>
</head>
<body>
    <div class="container">
        <h1 style="color: white; text-align: center;">Simulation de Feu Tricolore</h1>
        

        <div class="tricolore">
            <div class="lum  <?php echo ($etat == 'red') ? 'red' : ''; ?>"></div>
            <div class="lum  <?php echo ($etat == 'oronge') ? 'oronge' : ''; ?>"></div>
            <div class="lum  <?php echo ($etat == 'green') ? 'green' : ''; ?>"></div>
        </div>


        <div class="info">
            <p>État actuel: <?php echo ($etat); ?></p>
            <p>Numéro aléatoire: <?php echo $numero; ?></p>
        </div>


        <button onclick="location.reload()">Changer l'état</button>
    </div>

   
</body>
</html>