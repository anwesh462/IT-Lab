<!DOCTYPE html>
<html>
<body>
<?php
    $n1= 19.34;
    $n2= 54.676;

    $sum=$n1+$n2;

    echo "Addition:".$sum;
?>
<?php
$company = "tcs";
//both single and double quote statements will treat different
echo "Hello $company";
echo "</br>";
echo 'Hello $company';
?>
<?php
$bikes = array ("Royal Enfield", "Yamaha", "KTM");
var_dump($bikes); //the var_dump() function returns the datatype and values
echo "</br>";
echo "Array Element1: $bikes[0] </br>";
echo "Array Element2: $bikes[1] </br>";
echo "Array Element3: $bikes[2] </br>";
?>
</body>
</html>