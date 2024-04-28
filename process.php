<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve form data
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$sum=$num1+$num2;
echo "sum: $sum <br>";

}
?>