<?php
$first = $_POST['first'];
$second= $_POST['second'];
$operator = $_POST["group1"];
switch($operator)
{
    case "add":
    echo "Answer is: " .($first + $second);
    break; 
    case "subtract":
    echo "Answer is: " .($first - $second);
    break;
    case "times":
    echo "Answer is: " .($first * $second);
    break; 
    case "divide":
    echo "Answer is: " .($first / $second);
    break;
}
?>