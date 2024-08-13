<?php
//Calculator 2 numbers
//Enter two numbers
$value1 = 15;
$value2 = 7;

//Select an operation (addition, subtraction, multiplication, division)
$operation = 'subtraction';
function addition($val1, $val2){
    return $val1 + $val2;
}

function subtraction($val1, $val2){
    return $val1 - $val2;
}

function multiplication($val1, $val2): float|int
{
    return $val1 * $val2;
}

function division($val1, $val2): float|int
{
    return $val1 / $val2;
}

switch ($operation) {
    case 'addition':
        $result = addition($value1, $value2);
        break;
    case 'subtraction':
        $result = subtraction($value1, $value2);
        break;
    case 'multiplication':
        $result = multiplication($value1, $value2);
        break;
    case 'division':
        $result = division($value1, $value2);
        break;
}

echo "Calculator with functions<br>";
echo "Values: ".$value1." | ".$value2."<br>";
echo "Operation: ".$operation."<br>";
echo "Result: ".$result;