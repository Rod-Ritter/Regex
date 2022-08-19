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

    $masque = '/ch/'; 
    $citation ="les chaussettes de l'archiduchesses sont elles seches archiseche";

    $result = preg_split($masque, $citation);
    var_dump($result);
    

    
    
    ?>
    
</body>
</html>




