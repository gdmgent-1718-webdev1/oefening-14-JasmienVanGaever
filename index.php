<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php   
        for($i = 1; $i < 10; $i++){
            echo ("<a href='./patroon-0$i.php'> patroon $i </a> <br>");
        }

        for ($i = 9; $i < 13; $i++) {
            echo "<a href='./patroon-$i.php'> patroon $i </a> <br>";
            
        }
    
    ?> 
    
</body>
</html>