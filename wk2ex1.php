<?php
$hourlyrate	= 10.25;
$hoursperweek = 40;
$gross = $hourlyrate * $hoursperweek;
echo 'this my new wage';
echo 'my new gross wage is' <?php print("$gross");
?>
