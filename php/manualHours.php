<?php

$start1 = $_POST['start1'];
$end1 = $_POST['end1'];


function roundToQuarterHour($time){
	$timeArray = explode(":", $time);
	$minutes = $timeArray[1];
	$rmin = $minutes%15;
		if($rmin > 7){
			$minutes = $minutes + (15-$rmin);
		} else {
			$minutes = $minutes - ($rmin);
		}
		if($minutes==60){
			$minutes=00;
			$timeArray[0]++;
		}

		$minutes = $minutes/60;
	return $timeArray[0]+$minutes;
}


$start1 = roundToQuarterHour($start1);
$end1 = roundToQuarterHour($end1);

//echo $end1;

$hours = $end1 - $start1;


echo $hours;

?>