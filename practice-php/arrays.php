<!-- <div style='font-size:12px; color:#999;'>Employee #1</div>
<div style='font-size:16px; font-weight:bold; margin-bottom:20px;'>Arlo</div>

<div style='font-size:12px; color:#999;'>Employee #2</div>
<div style='font-size:16px; font-weight:bold; margin-bottom:20px;'>Bella</div>

<div style='font-size:12px; color:#999;'>Employee #3</div>
<div style='font-size:16px; font-weight:bold; margin-bottom:20px;'>Ciara</div> -->







<?php
	// $employees = ['Arlo', 'Bella', 'Ciara'];
	// $count = 1;
	
	// foreach($employees as $individualEmployee){
	// 	echo "
	// 		<div style='font-size:12px; color:#999;'>Employee #".$count."</div>
	// 		<div style='font-size:16px; font-weight:bold; margin-bottom:20px;'>".$individualEmployee."</div>
	// 	";
	// 	$count = $count+ 1;
	// }

	$employees = [
		[
			'Name' => 'Arlo',
			'PhoneNumber' => '123-456-7890'
		],
		[
			'Name' => 'Bella',
			'PhoneNumber' => '555-555-5555'
		],
		[
			'Name' => 'Ciara',
			'PhoneNumber' => '101-001-10001'
		],
	];

	$count = 1;
	//For each element in $empoyees refer to it as $inividualEmployee
	foreach($employees as $individualEmployee){
		echo "
			<div style='font-size:12px; color:#999;'>Employee #".$count."</div>
			<div style='font-size:16px; font-weight:bold;'>".$individualEmployee['Name']."</div>
			<div style='font-size:14px; margin-bottom:20px;'>".$individualEmployee['PhoneNumber']."</div>
		";
		$count++;
	}