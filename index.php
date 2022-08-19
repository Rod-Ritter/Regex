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

function dump($tab)
{
    echo '<pre style="height:100px;overflow-y: scroll;font-size:.5rem;padding: .6rem; font-family: Consolas, Monospace;background-color: #000;color:#fff;">';
    var_dump($tab);
    echo '</pre>';
}

    $masque1 = '/[aeiouy]/'; 
    $masque2 = '/j[aeiouy]/'; 
    $masque3 = '/[aeiouy][aeiouy]/'; 
    $chaine = 'je m appelle Michel';

    preg_match_all($masque1, $chaine, $tab);
    var_dump($tab);
    echo "<br />";
    preg_match_all($masque2, $chaine, $tab1);
    var_dump($tab1);
    echo "<br />";
    preg_match_all($masque3, $chaine, $tab2);
    var_dump($tab2);
    echo "<br />"

    



    
    
    

    
    
    ?>
    
</body>
</html>




