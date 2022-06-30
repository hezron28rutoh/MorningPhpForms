<?php
if (isset($_GET["submit"])){
    $principle = $_GET["principle"];
    $years = $_GET["years"];

    $simpleinterest = $principle * 0.075 * $years;
    echo "Hello there, your interest is $simpleinterest";
}
