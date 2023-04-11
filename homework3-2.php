<!DOCTYPE html>
<html>
<body>

<?php
$n = 20;

for ($x = 0; $x <$n; $x++)
{
	$data[$x]= rand(0,100);
    }

    
sort($data);

$clength = count($data);
for($x = 0; $x < $clength; $x++) {
  echo "$data[$x] ";
}


?>

</body>
</html>
