<?php
// Exercice 1
$age = 40;

function ages($age) {
    if ($age >= 18) {
        echo "Vous êtes majeur.";
    } else {
        echo "Vous êtes mineur.";
    }
}

ages($age);

// Exercice 2
$isEasy = "true";
$isDifficult = "false";

if (($isEasy === true)) {
    echo "C'est facile!!";
} else {
    echo "C'est difficile!!!";
}

// Exercice 3
$age = 65;
$gender = "Femme";


    if ($age >= 18 && $gender === "Femme") {
    echo "Vous êtes une femme et vous êtes majeur.";
} 
elseif ($age >= 18 && $gender === "Homme") {
    echo "Vous êtes un homme et vous êtes majeur.";
}
elseif ($age < 18 && $gender === "Femme") {
    echo "Vous êtes une femme et vous êtes mineur.";
}
elseif ($age < 18 && $gender === "Homme") {
    echo "Vous êtes un homme et vous êtes mineur.";
}

// Exercice 4 
$richter = 2;

switch($richter){
    case 1:
        echo "<p>Micro-séisme impossible à ressentir.</p>";
        break;
    case 2: 
        echo "<p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p>";
        break;
    case 3:
        echo "<p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p>";
        break
    case 4:
        echo "<p>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p>";
        break
    case 5: 
        echo "<p>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p>";
        break
    case 6:
        echo "<p>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</p>";
        break
    case 7:
        echo "<p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p>";
        break
    case 8:
        echo "<p>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p>";
        break
    case 9:
        echo "<p>Séisme capable de tout détruire sur une très vaste zone.</p>";
        break
}

// Exercice 5
$gender = "Femme";

    if ($gender != "Homme") {
    echo "C'est une développeuse !!!";
} else {
    echo "C'est un développeur !!!";
}

// Exercice 6
$age = 16;

if ($age < 18) {
    echo "Tu n'es pas majeur.";
} else {
    echo "Tu es majeur";
}

// Exercice 7
$isOk = false;

if ($isOk) {
    echo "C'est ok !!";
} else {
    echo "C'est pas bon !!!";
}

// Exercice 8 
$isOk = true;

if ($isOk) {
    echo "C'est ok !!";
} else {
    echo "C'est pas bon !!!";
}

?>