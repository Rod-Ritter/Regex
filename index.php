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
    echo '<pre style="font-size:.8rem;padding: .6rem; font-family: Consolas, Monospace;color:#000;">';
    var_dump($tab);
    echo '</pre>';
}

 /*  Classes de caractères abbrégées
    *   \w, tous les caractères [a-zA-Z0-9_]
    *   \W, aucune caractères [^a-zA-Z0-9_]
    *   \d, tous les valeurs numériques
    *   \D, tout ce qui n'est pas une valeur numérique
    *   \s, caractère blanc (espace, retour chariot, retour à la ligne)
    *   \S, tout sauf un caractère blanc
    *   \h, espace horizontal
    *   \H, tout sauf espace horizontal
    *   \v, espace vertical
    *   \V, tout sauf espace vertical
    */


    $masque1 = "/[\W]/";
    $masque2 = "/[\d]/"; 
    $masque3 = "/[\D]/"; 
    $masque4 = "/[\s]/"; 
    $chaine = 'je m\'appelle Amir est j\'ai 42 ans';


    preg_match_all($masque1, $chaine, $tab);
    dump($tab);
    echo "<br />";
    preg_match_all($masque2, $chaine, $tab1);
    dump($tab1);
    preg_match_all($masque2, $chaine, $tab2);
    dump($tab1);
    preg_match_all($masque2, $chaine, $tab3);
    dump($tab1);


    



    
    
    

    
    
    ?>
    
</body>
</html>




