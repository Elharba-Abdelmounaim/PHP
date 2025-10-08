<?php
    include 'exercice1.txt';

    echo '<table border="1">';
    echo '<tr><th>Produit</th>
        <th>Quantit</th>    
        <th>Prix Unitaire ($)</th>  
        <th>Total ($)</th>
        </tr>';

    foreach ($produits as $pr) {
        $total = $pr['prix'] * $pr['quantite'];
        echo '<tr>';
        echo "<td>{$pr['nom']}</td>";
        echo "<td>{$pr['quantite']}</td>" ;
        echo "<td> {$pr['prix']} </td>" ;
        echo '<td>' . $total . '</td>' ;

        echo '</tr>';
    }

?>