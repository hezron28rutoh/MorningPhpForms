<?php
//check if the button has been clicked using the method on the form
if (isset($_GET["z"])){
    //start receiving data from the form
    $firstnumber = $_GET["x"];
    $secondnumber = $_GET["y"];
    //compute the data received and echo the answer
    $answer = $firstnumber + $secondnumber;
    echo "Hello there, your answer is $answer.";
}
if (isset($_GET["bmi"])){
    $weight = $_GET["weight"];
    $height = $_GET["height"];

    $BMI = $weight / pow($height, 2);
    echo "Hello there, your BMI is $BMI.";
}