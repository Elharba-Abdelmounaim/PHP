<?php

$type_alert = 'error';


$message_alert = "Ceci est un message d'alerte de type $type_alert.";



switch ($type_alert) {
    case 'success':
        $color = '#27ae60'; 
        break;
    case 'error':
        $color = '#e74c3c';
        break;
    case 'warning':
        $color = '#f39c12'; 
        break;
    default:
        $color = '#95a5a6'; 
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alerte Dynamique</title>
    <style>
        .alerte {
            padding: 15px 25px;
            color: white;
            border-radius: 8px;
            margin: 20px auto;
            max-width: 500px;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="alerte" style="background-color: <?php echo $color; ?>;">
        <?php echo $message_alert; ?>
    </div>

</body>
</html>
