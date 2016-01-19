<?php
// use foreach for array search 
$array = range('a','z');
echo "print an array with key and value </br>";
foreach ($array as $key => $value) {
	echo  $key . '=>' . ' '. $value.'</br>' ;
}
?>