<?php
header("Content-Type: application/json; charset=UTF-8");
$textFile = 'state.JSON';
$writeOK = 'WRITE_OK';


// Open textfile
$fp = fopen($textFile, 'r');
$arrayText = fread($fp, 4096);
fclose($fp);
$stateObj = json_decode($arrayText, true);

echo var_dump($stateObj);


?>