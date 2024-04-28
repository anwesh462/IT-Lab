<!DOCTYPE html>
<html>
<body>
<form action="process.php" method="post">
<label for="num1">Enter Number 1:</label>
<input type="text" id="num1" name="num1"><br>

<label for="num2">Enter Number 2:</label>
<input type="text" id="num2" name="num2"><br>

<input type="submit" value="Calculate Sum"><br>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve form data
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$sum=$num1+$num2;

echo "Sum of $num1 and $num2 is : $sum <br>";

}
?>
</form>
</body>
</html>