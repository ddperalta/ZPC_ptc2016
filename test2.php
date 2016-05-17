<?php
echo 1 + 5 / 8 * 9 - 21 ** 2 , PHP_EOL;
var_dump(true << 2);

$a = "👽";
$b = & $a;
$👽 = &$b;

echo "\$👽 = $👽\n";

$👽 = '😻';
echo "\$a = $a\n";
echo "\$b = $b\n";
echo "\$👽 = $👽\n";

?>