<?php

//Day 1
$day1start1 = $_POST['start1.1'];
$day1end1 = $_POST['end1.1'];
$day1start2= $_POST['start1.2'];
$day1end2 = $_POST['end1.2'];

//Day 2
$day2start1 = $_POST['start2.1'];
$day2end1 = $_POST['end2.1'];
$day2start2 = $_POST['start2.2'];
$day2end2 = $_POST['end2.2'];

$day = array();

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


$start11 = roundToQuarterHour($start1);
$end1 = roundToQuarterHour($end1);
$end2 = roundToQuarterHour($end2);
$start2 = roundToQuarterHour($start2);

//echo $end1;

$hours = $end1 - $start1;
$hours2 = $end2 - $start2;

$totalHours = $hours + $hours2;

$day[1] = $totalHours;
echo "Day 1: ".$day[1]."<br/>";
//Now it needs to store all of the data in a database

echo "Total Hours: $totalHours <br/> Shift 1: $hours <br/> Shift 2: $hours2";

?>