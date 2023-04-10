<!DOCTYPE html>
<html>
<body>

<?php  
$n = 30;
$sum =0;
$prod = 1;
for ($x = 1; $x <= $n; $x++) {
 $sum += $x;
 $prod = $prod * $x;
}
echo "합은 $sum <br>";
echo "곱은 $prod <br>";
?>  

</body>
</html>