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
const AANTAL = 10;
    for ($i =1 ; $i < AANTAL; $i++){
        for($j =1 ; $j < AANTAL; $j++){
     
      if ($i == $j){
          //rood
          $color = "red";
          
        }elseif ($j < $i){
            //blauw
            $color = "green";
        }else{
            //groen
            $color = "blue";
        }
        echo ("<div class ='circle' style=background:$color;></div>");
    }
    }
    ?> 
</body>
</html>