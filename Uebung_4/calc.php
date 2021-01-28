<?php
$x = $_GET["Zahl1"];
$y = $_GET["Zahl2"];
$z = $_GET["Option"];

if($z == 'plus'){
    $Resultat = $x + $y;
    echo "Das Resultat ist: {$Resultat}";
}
if($z == 'minus'){
    $Resultat = $x - $y;
    echo "Das Resultat ist: {$Resultat}";
}
if($z == 'multiplikation'){
    $Resultat = $x * $y;
    echo "Das Resultat ist: {$Resultat}";
}
if($z == 'division'){
    $Resultat = $x / $y;
    echo "Das Resultat ist: {$Resultat}";
}
?>