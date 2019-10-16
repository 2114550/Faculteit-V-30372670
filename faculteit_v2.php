<?php
echo "Van welk getal wil je de faculteit?".PHP_EOL;
$getal=readline();
if (is_numeric($getal)) {
    $i = 1;
    $getal2 = 1;
    while ($i != $getal) {
        $getal2 = $getal2 * ($i + 1);$i++;}
    echo "De faculteit van $getal is $getal2";
}
else {
    echo "bruh";
}