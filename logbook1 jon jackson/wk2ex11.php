<?php
$mymarks["Application programming C0333"] = 22; 
$mymarks["Games CO000"] = 40;
$mymarks["Open Source C897"] = 30;
$mymarks["Networking C321"] = 70;
$mymarks["Computuer Architecture CO777"] = 60;
$mymarks["Web Development C776"] = 50;

while(list($index,$value) = each($mymarks))
{
echo"for $index my grade was $value <br/>";

$total = 0;
$total = $total + $mymarks[$index];
$average = $total / 6;
}

echo "my average was $average"
?>


