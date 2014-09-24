<?php

	date_default_timezone_set('America/New_York');
	$time = date('g:ia');
	$zone = date('e');

	$hour = date('G');
	
	$picture;
	$timeofday;
	
	if($hour < 11 && $hour >= 5) //morning
	{
		$picture = 'php-morning.png';
		$timeofday = 'morning';
	}
	elseif($hour < 16 && $hour >= 11) //day
	{
		$picture = 'php-afternoon.png';
		$timeofday = 'afternoon';
	}
	elseif($hour < 20 && $hour >= 16) //evening
	{
		$picture = 'php-evening.png';
		$timeofday = 'evening';
	}
	else //niight
	{
		$picture = 'php-night.png';
		$timeofday = 'night';
	}
?>