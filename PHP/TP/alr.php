<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $type = "success";

    $messge = "Ceci est un message d'alerte de type $type";

    if ($type == "error"){
        $color = "red";
    }

    else if($type == "success"){
        $color = "green";
    }

    else {
        $color = "oronge";
    }
    ?>

    <style>
        .alerte{
            margin:10px 0 0 30px;
            width: 90%;
            height: 30px;
            background:red;
            color:black;
            padding: 15px;
            border-radius: 8px;
            margin: 20px ;
            text-align: center;
  
        }
    </style>
</head>
<body>
    <div class="alerte" style="background : <?php echo $color  ?>>
        <?php echo $messge?>

    </div>

</body>
</html>