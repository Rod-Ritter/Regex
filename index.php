<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
</head>
<body>
    <h1>Faisons du Regex</h1>
    <?php

    $masque = '/m/i'; // la mettre i rend inssensible à la case 
    $chaine = 'michel';

    if(preg_match($masque, $chaine)) {
        echo "<p>j'ai trouvé l'occurence!</p>";
        echo "<p>la chaine de caractere recherchée est présente : " .preg_match_all($masque, $chaine) . "fois </p>";
    }
    else {
        echo "<p>je n'ai rien trouvé...</p>";
    }
    
    ?>
    
</body>
</html>




