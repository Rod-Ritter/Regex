<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
</head>
<body>
    <h1>Faisons tous du Regex (comme moi)</h1>
    <?php

    $masque = '/Michel/'; 
    $chaine = 'Bonjour je m\'appelle Michel';

    $valeur = preg_filter($masque, 'Robert', $chaine);
    echo "<p>$valeur</p>";
    

    
    
    ?>
    
</body>
</html>




