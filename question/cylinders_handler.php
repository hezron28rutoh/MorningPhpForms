<?php
if (isset($_GET["compute"])){
    $radius_1 = $_GET["radius_1"];
    $height_1 = $_GET["height_1"];

    $volume1 = pi() * pow($radius_1, 2) * $height_1;
    echo "Cylinder one has a volume of $volume_1";
}

if (isset($_GET["compute"])){
    $radius_2 = $_GET["radius_1"];
    $height_2 = $_GET["height_1"];

    $volume_2 = pi() * pow($radius_2, 2) * $height_2;
    echo "Cylinder one has a volume of $volume_2";
}
echo "<br>";
if ($volume1 > $volume2){
    echo "Cylinder 1 is greater than Cylinder 2";
}else {
    echo "Cylinder 2 is greater than Cylinder 1";
}
