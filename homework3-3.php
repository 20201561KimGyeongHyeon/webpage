<!DOCTYPE html>
<html>
<body>

<?php
$n = 5;
$num1 = 0;
$num2 = 1;
for ($i = 0; $i <=$n; $i++){
    $total = $num1 + $num2;
    $fibo = $total / $num2;
    echo "$total $num2 $fibo<br>";
    $num1 = $num2;
    $num2 = $total;
}


?>  

</body>
</html>