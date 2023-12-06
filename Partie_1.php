<?php
//  Exercice 1
$name = "Manon";
echo "<p>" . $name . "</p>";

// Exercice 2
$lastName = "Caffin ";
$firstName = "Manon ";
$age = 33;

echo "Je m'apelle" . $lastName . $lastname . "j'ai" . $age;

// Exercice 3
$km = 1;
echo  "<p>". $km . "</p>";
$km = $km + 2;
echo "<p>" . $km . "</p>";
$km += 125;
echo "<p>" . $km . "</p>";

// Exercice 4
$mot = 'Hello';
$nombreVirgule = 5.2;
$nombreEntier = 5;
$choice = false;

echo "<p>" . $mot . "</p>";
echo "<p>" . $nombreVirgule . "</p>";
echo "<p>" . $nombreEntier . "</p>";
echo "<p>" . $choice . "</p>";

// Exercice 5
function nombres($nombre) {
    echo   $nombre ;
}

nombres($nombre2); 
nombres(19);

// Exercice 6
$name = "Manon";
echo  "<p> Bonjour " . $name . ", comment vas-tu ?</p>";

// Exercice 7 
$lastName = "Caffin";
$firstName = "Manon";
$age = 33;

echo 'Bonjour ' . $firstName . ' ' . $lastName . ', tu as ' . $age . ' ans.'

?>