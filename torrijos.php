<!DOCTYPE html>
<html>
<head>
    <?php
    $xml = simplexml_load_file('Melaya_IT2C_Marinduque/torrijos.xml');
    ?>
    <title><?php echo $xml->content->title; ?></title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            padding: 20px;
            margin: 0;
        }
        
        .header {
            background-color: darkgreen;
            padding: 20px;
            text-align: center;
            color: white;
        }
        
        .header h1 {
            color: white;
            margin: 0;
        }
        
        .town-info {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: white;
        }
        
        .town-info img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        
        .town-info p {
            margin-top: 20px;
        }
        
        .home-button-container {
            text-align: center; /* Added */
        }
        
        .home-button {
            background-color: darkgreen;
            color: black;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .home-button:hover {
            background-color: black;
            color: darkgreen;
        }
        
        @media (max-width: 768px) {
            .town-info {
                text-align: left;
            }
            
            .town-info img {
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1><?php echo $xml->content->welcome; ?></h1>
    </div>
    
    <div class="town-info">
        <img src="img/destination4.jpg" alt="Town A Image">
        <p><?php echo $xml->content->description; ?></p>
    </div>
    
    <div class="home-button-container">
        <a class="home-button" href="index.php"><?php echo $xml->content->button; ?></a>
    </div>
</body>
</html>
