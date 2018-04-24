<?php
$gewicht = $_GET["gewicht"];
$lengte = $_GET["lengte"];
BMIcalc($gewicht, $lengte);

function BMIcalc($gewicht, $lengte)
{
    $gewicht = (int)$gewicht;
    $lengte = (int)$lengte;
    $bmi = $gewicht / (($lengte / 10000) * $lengte);
    $bmi = round($bmi, 1);
    echo '<p>Gewicht: ' . $gewicht . ' KG</p>' .
        '<p>Lengte: ' . $lengte . ' CM</p>' .
        '<p>BMI: ' . $bmi . '</p>';
    switch ($bmi) {
        case $bmi < 0 :
            echo "<p>Ongeldige BMI en/of geen valide/missende input, probeer het opnieuw</p>";
            break;
        case $bmi < 18.5:
            echo "<p>Ondergewicht</p>";
            break;
        case $bmi >= 18.5 && $bmi < 25:
            echo "<p>Normaal/Gezond gewicht</p>";
            break;
        case $bmi >= 25 && $bmi < 27:
            echo "<p>Licht overgewicht</p>";
            break;
        case $bmi >= 27 && $bmi < 30:
            echo "<p>Matig overgewicht</p>";
            break;
        case $bmi >= 30 && $bmi < 40:
            echo "<p>Obesitas</p>";
            break;
        case $bmi >= 40 && $bmi < 100:
            echo "<p>Morbide obesitas</p>";
            break;
        case $bmi >= 100:
            echo "<p>Ongelde BMI en/of geen valide/missende input, probeer opnieuw</p>";
            break;
        default:
            echo "<p>Geen valide/missende input</p>";
    }
}