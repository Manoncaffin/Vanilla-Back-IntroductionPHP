<?php

// Exercice 1
for ($i = 0 ; $i < 11 ; $i ++){
    echo $i;
}

// Exercice 2
$i = 0;
$b = 85;

while ($i <= 20){
    echo "<p>". ($i * $b) . "</p>";
    $i++;
}

// Exercice 3
$a = 100;
$b = 40;

while ($a <= 10){
    echo "<p>". ($a * $b) . "</p>";
    $a--;
}

// Exercice 4
for( $i = 1; $i <=10;$i =  $i/2 +$i )
echo $i."     ";

// Exercice 5
$a = 0;
while ($a <= 14){
    echo "<p>". ($a += 1) . "</p>";
    echo "<p>On y arrive presque.</p>";
}

// Exercice 6
$a = 21;
while ($a > 0){
    echo "<p>". ($a -= 1) . "</p>";
    echo "<p>C'est presque bon.</p>";
}

// Exercice 7
$a = 0;
while ($a <= 100){
    echo "<p>". ($a += 15) . "</p>";
    echo "<p>On tient le bon bout.</p>";
}

// Exercice 8
$a = 200;
while ($a > 0){
    echo "<p>". ($a -= 12) . "</p>";
    echo "<p>Enfin !!!!</p>";
}
?>