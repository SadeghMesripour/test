<?php
// use while loop 
$counter = 1;
$result = 0;
while($counter<=10) {
	$result += $counter+10;
	$counter++;
}
echo $result;