<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            background: #000000ff;
      
            padding: 20px;
        }


        .navbar {
            background: white;
            
            padding: 0;
            border-radius: 12px;
         
            margin-bottom: 30px;
            
        }

        .nav-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 5PX 20px;
        }

        .nav-list {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            display: block;
            padding: 18px 30px;
            text-decoration: none;
            color: #555;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.3s ease;
            position: relative;
            border-radius: 8px;
            margin: 0 6px;
        }
        
        .nav-link.active {
            color: #fff;
            background: linear-gradient( #667eea, #764ba2);
            font-weight: bold;

            transform: translateY(-6px);
        }


        .main-content {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

      

    </style>
</head>
<body>
    <?php
  
    

    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $pageActive = $_GET['page'];
    } 

    
    $pages_autorisees = ['accueil', 'a-propos', 'produits', 'contact'];
    
   
    if (!in_array($pageActive, $pages_autorisees)) {
        $pageActive = 'accueil';
    }


    $pages_data = [
        'accueil' => [
            'title' => 'Accueil',
            'CONTENT' => 'ABDELMOUNAIM ELHARBA', 
        ],
        'a-propos' => [
            'title' => 'À propos',
        ],
        'produits' => [
            'title' => 'Produits',
        ],
        'contact' => [
            'title' => 'Contact',
        ]
    ];

    $current_page_data = $pages_data[$pageActive];
  

    ?>


    <nav class="navbar">
        <div class="nav-container">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="?page=accueil" class="nav-link <?php echo ($pageActive == 'accueil') ? 'active' : ''; ?>">
                        Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=a-propos" class="nav-link <?php echo ($pageActive == 'a-propos') ? 'active' : ''; ?>">
                        À propos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=produits" class="nav-link <?php echo ($pageActive == 'produits') ? 'active' : ''; ?>">
                        Produits
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=contact" class="nav-link <?php echo ($pageActive == 'contact') ? 'active' : ''; ?>">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <h1><?php echo ($current_page_data['title']); ?></h1>
        <h1><?php echo $current_page_data['CONTENT']; ?></h1>

    </main>
    

</body>
</html>