<?php
$x = 10;
$y = &$x;

echo "x= ".$x."\n";
echo "y= ".$y."\n";

$x = 20;
echo "x= ".$x."\n";
echo "y= ".$y."\n";

$x = 30;
$y = 40;

// $x = &$y;
echo "x= ".$x."\n";
echo "y= ".$y."\n";

$x += 2;
echo $x."\n";
$x -= 2;
echo $x."\n";
$x *= 2;
echo $x."\n";
$x /= 2;
echo $x."\n";
$x %= 3;
echo $x."\n";
$x .= 3;
echo $x."\n";

$x = 1;
echo $x << 64;
echo "\n";
echo $x * pow (2, 64);
echo "\n";


class 💩💩💩💩
{
    function 💩💩💩($😎, $🐯)
    {
        return $😎 + $🐯;
    }
}
$🐔 = 5;
$😥 = $🐔 + 2;
$💩 = new 💩💩💩💩();
echo $💩 -> 💩💩💩($🐔, $😥);

?>