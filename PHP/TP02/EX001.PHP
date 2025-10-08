<?php
// Tableau des produits
$produits = [
    ['nom' => 'Ordinateur', 'quantite' => 10, 'prix' => 800],
    ['nom' => 'Souris', 'quantite' => 50, 'prix' => 20],
    ['nom' => 'Clavier', 'quantite' => 30, 'prix' => 50],
    ['nom' => 'Écran', 'quantite' => 20, 'prix' => 150],
    ['nom' => 'Imprimante', 'quantite' => 15, 'prix' => 100]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        th {
            background-color: #2c3ce8ff;
            color: white;
        }

        td{
            text-align: center;
        }
        tr:nth-child(even){background-color: #2296ccff}

        .total{
              text-align: center;
        }

        

        
    </style>
</head>
<body>

<table border="1">
    <tr >
        <th>Produit</th>
        <th>Quantit</th>
        <th>prix Unitaire</th>
        <th>Total</th>
    </tr>
   
        <?php
        $total = 0;
            foreach($produits as $nb){
                echo"<tr>";
                echo "<td>". $nb['nom'] ."</td>";
                echo "<td>". $nb['quantite'] ."</td>";
                echo "<td>". $nb["prix"] ."</td>";
                $total += $nb['quantite'] * $nb["prix"] ;
                echo "<td>".  $nb["prix"] * $nb['quantite']."</td>";
                echo"</tr>";
            }
        ?>
        <tr>
            <td colspan=3 class="total">
             Total
            </td>
            <td>
                <?php  echo "$total" ?>
            </td>
        </tr>
  

</table>
    
</body>
</html>