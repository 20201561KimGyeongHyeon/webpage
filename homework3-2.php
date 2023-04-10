<!DOCTYPE html>
<html>
<body>
<?php
    $n = 30;
    for ($i = 0; $i < $n; $i++) {
      $dada[$i] = rand(10, 100);
    }
    sort($dada);
    echo implode(", ", $dada) . "<br>";
    ?>

</body>
</html>