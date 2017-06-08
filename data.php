<?php
header("Content-Type: application/json; charset=UTF-8");
$textFile = 'state.JSON';
$writeOK = 'WRITE_OK';
$readOK = 'OK';

// Open textfile
$fp = fopen($textFile, 'r');
$arrayText = fread($fp, 4096);
fclose($fp);
$stateObj = json_decode($arrayText, true);



//DEBUG
//echo var_dump( $stateObj ) ;



// Check was sucessful write/read
$writeResponse = $stateObj["response"];
if ($writeResponse != $writeOK) {
	?>{"response":"ERROR"}<?php
	die();
}
$stateObj["response"] = "";
$stateObj["responseText"] = "";


// See if input
$fullTag = strtoupper ($_GET["x"]);


if ($fullTag != NULL) {
	
	// Parse Input
	$parts = explode('_', $fullTag);
	$val = 0;
	if ($parts[2] == "ON") { $val = 1; }
	$tag = $parts[0] . '_' . $parts[1] ;
	
	//echo var_dump($val);
	
    if (count($parts) != 3) {
			?>{"response":"ERROR-Incorrect Format"}<?php
		die();
	}		
	
    if (!($parts[2] == 'ON' || $parts[2] == 'OFF')) {
			?>{"response":"ERROR-Incorrect Operation"}<?php
		die();
	}	
	
	
	if (!array_key_exists($tag, $stateObj["_DESC"])) {
		if (!array_key_exists($fullTag, $stateObj["_DESC"])) {
			?>{"response":"ERROR-Key Not in List"}<?php
			die();
		}
	}	
	
	
	// Handle "LIGHT" Ops
	if ($parts[0] == "LIGHT" || $parts[0] == "ALL") {
		foreach($stateObj["LIGHT"] as $thisTag => $tagVal){
			if ($thisTag == $tag || $parts[1] == 'ALL') {
				$stateObj["LIGHT"][$thisTag] = $val;
			}
		}
	}// Handle "POWER" Ops
	if ($parts[0] == "POWER" || $parts[0] == "ALL") {
		foreach($stateObj["POWER"] as $thisTag => $tagVal){
			if ($thisTag == $tag) {
				$stateObj["POWER"][$thisTag] = $val;
			}
			else {
				$stateObj["POWER"][$thisTag] = 0;
			}
		}
	}
	$stateObj["responseText"] = 'Updated ' . $stateObj['_DESC'][$tag] . ' to ' . $parts[2];
}
$stateObj["response"] = $readOK;


// Send text
$arrayText = json_encode($stateObj);
echo $arrayText;
//echo var_dump($stateObj);

// Update Status 
$stateObj["response"] = $writeOK;
$stateObj["responseText"] = "";

// Write File
$fp = fopen($textFile, 'w');
fwrite($fp, json_encode($stateObj));
fclose($fp);

?>