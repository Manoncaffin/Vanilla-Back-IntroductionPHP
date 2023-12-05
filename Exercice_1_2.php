<?php

$age = 40;

function ages($age) {
    if ($age >= 18) {
        echo "Vous êtes majeur.";
    } else {
        echo "Vous êtes mineur.";
    }
}

ages($age);

?>