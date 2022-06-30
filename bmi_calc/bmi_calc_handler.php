<?php
//check if the calc has been clicked
if (isset($_GET["bmi"])){
    //obtain data from the form
    $weight = $_GET["weight"];
    $height = $_GET["height"];
    //compute the data and get the desired results.
    $BMI = $weight / pow($height, 2);
    //output the results
    echo "Hello there, your BMI is $BMI.";
}