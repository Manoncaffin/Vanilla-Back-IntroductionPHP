<?php

$age = 65;
$gender = "Femme";


    if ($age >= 18 && $gender === "Femme") {
    echo "Vous êtes une femme et vous êtes majeur.";
} 
elseif ($age >= 18 && $gender === "Homme") {
    echo "Vous êtes un homme et vous êtes majeur.";
}
elseif ($age <= 18 && $gender === "Femme") {
    echo "Vous êtes une femme et vous êtes mineur.";
}
elseif ($age <= 18 && $gender === "Homme") {
    echo "Vous êtes un homme et vous êtes mineur.";
}

?>