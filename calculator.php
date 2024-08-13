<?php
//Calculator with functions

//Enter two values
$value1 = 4;
$value2 = 2;

//Enter an operation (addition, subtraction, multiplication, division, power)
$operation = "power";

function addition($val1, $val2){
    return $val1 + $val2;
}

function subtraction($val1, $val2){
    return $val1 - $val2;
}

function multiplication($val1, $val2){
    return $val1 * $val2;
}

function division($val1, $val2){
    return $val1 / $val2;
}

function power($val1, $val2){
    return $val1 ** $val2;
}

$result = 0;

switch ($operation) {
    case "addition":
        $result = addition($value1, $value2);
        break;
    case "subtraction":
        $result = subtraction($value1, $value2);
        break;
    case "multiplication":
        $result = multiplication($value1, $value2);
        break;
    case "division":
        $result = division($value1, $value2);
        break;
    case "power":
        $result = power($value1, $value2);
        break;
}

echo "Calculator with function<br>";
echo "Operation: ".$operation."<br>";
echo "Values: ".$value1." | ".$value2."<br>";
echo "Result: ".$result."<br><br>";
echo "Thanks!";