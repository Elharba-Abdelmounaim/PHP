<?php
// Tableau des employés
$employes = [
    [
        'nom' => 'Alice',
        'poste' => 'Développeur',
        'salaire' => 3500,
        'date_embauche' => '2018-05-12',
        'image' =>  'produit1.jpeg',
        'social' => [
            'linkedin' => 'https://www.linkedin.com/in/alice',
            'twitter' => 'https://twitter.com/alice',
            'facebook' => 'https://facebook.com/alice'
        ]
    ],
    [
        'nom' => 'Bob',
        'poste' => 'Designer',
        'salaire' => 3200,
        'date_embauche' => '2019-09-23',
        'image' => 'produit1.jpeg',
        'social' => [
            'linkedin' => 'https://www.linkedin.com/in/bob',
            'twitter' => 'https://twitter.com/bob',
            'facebook' => 'https://facebook.com/bob'
        ]
    ],
    [
        'nom' => 'Clara',
        'poste' => 'Manager',
        'salaire' => 5000,
        'date_embauche' => '2015-02-01',
        'image' => 'produit1.jpeg',
        'social' => [
            'linkedin' => 'https://www.linkedin.com/in/clara',
            'twitter' => 'https://twitter.com/clara',
            'facebook' => 'https://facebook.com/clara'
        ]
    ],
    [
        'nom' => 'David',
        'poste' => 'Chef de projet',
        'salaire' => 4500,
        'date_embauche' => '2017-07-18',
        'image' => 'produit1.jpeg',
        'social' => [
            'linkedin' => 'https://www.linkedin.com/in/david',
            'twitter' => 'https://twitter.com/david',
            'facebook' => 'https://facebook.com/david'
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
 <style>
        body {
            margin:0;
            background: #ffffffff;
             display:flex;
            justify-content:center;  
            align-items:center;      
            height:100vh; 
           
        }

        .content{
            display: flex;
            flex-direction:column;
            justify-content: center;
            background: #f5f5f5;
            padding: 20px;   
        }

        h1{
            text-align:center;
            margin:20px 0;
        }

        .cards{
            display:flex;
            flex-wrap:wrap;
            gap:20px;
            justify-content:center;
            width: 100%;
        }

        .card {
            width: 250px;             
            background: white;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;  
            padding-bottom:20px; 
            
        }
        .card img{
            width: 100%;
            border-radius:10px;
        }
        .info{
            text-align:center;
            margin-top:10px;
            margin-bottom:20px;
        }

        h3{
          
            color : green;
        }

        .total_button{
            width: 300px;
            
            background:green;
            color:white; 
            padding:8px 12px;
            border-radius:5px;
            margin: 20px auto;
        }

     
    </style>
</head>
<body>
    
  <div class="content" >
    <h1>Notre Equipe</h1>
        <div class="cards">
                <?php foreach ($employes as $emp){
                echo '  
                    
                    <div class="card">
                        <img src="'.$emp['image'].'" alt="'.$emp['nom'].'">

                        <div class="info">
                            <h3>'.$emp['nom'].'</h3>
                            <p> Post : '.$emp['poste'].'</p>
                            <p> Salaire : '.$emp['salaire'].'</p>
                            <p> Date d\'embauche : '.$emp['date_embauche'].'</p>
                        </div>

                        <div>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>';
                }
                ?>
        </div>
         <?php 
            $totalSalaire = 0;
            foreach ($employes as $sum) {
                $totalSalaire += $sum['salaire'];
            }

         ?>
        <button class="total_button" > Salaire Total : <?= $totalSalaire ?></button>
    </div>
</body>
</html>
