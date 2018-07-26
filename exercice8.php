//Exercice 8 En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!//

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
    for ($a=200;$a>0;$a=$a-12) {
        
        echo $a . "Enfin!!!";
    };
    ?>
</body>
</html>