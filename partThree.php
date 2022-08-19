<?php

$masque = '/ch/'; 
$citation ="les chaussettes de l'archiduchesses sont lles seches archiseche";
$citation ="les chaussettes de l'archiduchesses sont elles seches archiseche";

$result = preg_split($masque, $citation);
var_dump($result);