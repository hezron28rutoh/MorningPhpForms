<?php
//check if the button has been clicked
if (isset($_POST["btn_calc"])) {
    //start receiving data from the table
    $email = $_POST["u_email"];
    $password = $_POST["u_password"];
    $weight = $_POST["u_weight"];
    $height = $_POST["u_height"];

    //check if email and password is correct before calculating bmi
    if ($email == "emobilis@gmail.com" && $password == "emobilis@123"){
        //proceed to calculate the bmi
        $bmi = $weight / pow($height, 2);
        echo "hello, your BMI is $bmi";
    }else{
        echo "Wrong email or password";
    }
}