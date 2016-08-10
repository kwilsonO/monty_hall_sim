<?php

/**$options = getopt("r:d:");

$runs = $options['r'];
if ($runs == ""){
	$runs = 1000;
}
$doors = $options['d'];
if ($doors == "" ){
	$doors = 3;
}
echo "Number of runs: $runs\n";
echo "Number of doors: $doors\n";
**/

$runs = 1000.0;
$stayWinCount = 0;
$switchWinCount = 0;



for ($x = 0; $x < $runs; $x++){
	
	$doorRay =  array( 0, 0, 0);

	$prizeIndex = rand(0, 2);
	$doorRay[$prizeIndex] = 1;

	if( $prizeIndex == 0 ){
		$stayWinCount++;
	} else if ( $prizeIndex == 1 ){
		$switchWinCount++;
	} else {
		$switchWinCount++;
	}

}

$stayWinPer = $stayWinCount / $runs;
$switchWinPer = $switchWinCount / $runs;

echo "Staying win percentage: $stayWinPer\n";
echo "Switching win percentage: $switchWinPer\n";

?>
