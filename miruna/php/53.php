<?php

//1
$nota_int = 10;
$nota_float = 10.0;
var_dump(
    $nota_int + $nota_float,
    $nota_int - $nota_float,
    $nota_int * $nota_float,
    $nota_int / $nota_float,
    $nota_int % $nota_float,
    $nota_int ** $nota_float
);

//2
$nota_int += 1;
$nota_float += 1;
echo "\n<br>";
var_dump($nota_int, $nota_float);

//3
$nota_int = $nota_int + 1;
$nota_float = $nota_float + 1;
echo "\n<br>";
var_dump($nota_int, $nota_float);

//4
echo "\n<br>";
var_dump($nota_int == $nota_float);
var_dump($nota_int === $nota_float);
var_dump($nota_int != $nota_float);
var_dump($nota_int <> $nota_float);
var_dump($nota_int !== $nota_float);
var_dump($nota_int > $nota_float);
var_dump($nota_int < $nota_float);
var_dump($nota_int >= $nota_float);
var_dump($nota_int <= $nota_float);
var_dump($nota_int <=> $nota_float);

//5
echo "\n<br>";
$tip_user = "premium";
if ($tip_user == "premium") {
    echo "Userul este premium.";
} elseif ($tip_user == "normal") {
    echo "User este normal.";
} else {
    echo "Userul nu este premium.";
    echo "Incearca premium si bucura-te de filme fara reclame.";
}

//6
echo "\n<br>";
$tip_user = "premium";
switch ($tip_user) {
    case "premium":
        echo "Userul este premium.";
        break;
    case "normal":
        echo "Userul este normal.";
        break;
    default:
        echo "Userul nu este premium.";
        echo "Incearca premium si bucura-te de filme fara reclame.";
}

//7
echo "\n<br>";
$i = 1;
while ($i <= 20) {
    echo $i . ', ';
    // $i++;
    $i += 2;
}

//8
echo "\n<br>";
$i = 1;
do {
    echo $i . ', ';
    $i +=2;
} while ($i <=20);

//9
echo "\n<br>";
for ($i = 1; $i <= 20; $i+=2) {
    echo $i . ', ';
}

//10
echo "\n<br>";
$tip_user = "genius";
$nota = 9;
if ($nota > 7); {
$mesaj = "$tip_user de $nota";
}
var_dump($mesaj);


?>