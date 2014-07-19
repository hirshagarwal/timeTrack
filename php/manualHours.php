<?php

$start1 = $_POST['start1'];
$end1 = $_POST['end1'];


if($start1>$end1){
$hours = $start1 - $end1;
} else {
	$hours = $end1 - $start1;
}

echo $hours;



?>