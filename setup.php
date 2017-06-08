<?php
header("Content-Type: application/json; charset=UTF-8");

$textFile = 'state.JSON';


$state['response'] = 'WRITE_OK';
$state['responseText'] = '';


$state['LIGHT']['LIGHT_SIDE'] = 0;
$state['LIGHT']['LIGHT_FRONT'] = 0;
$state['LIGHT']['LIGHT_LED'] = 0;


$state['POWER']['POWER_FRIDGE'] = 0;
$state['POWER']['POWER_COFFEE'] = 0;
$state['POWER']['POWER_COOKER'] = 0;


$state['STATUS']['STATUS_INVERTOR'] = 0;
$state['STATUS']['STATUS_HEATER'] = 0;
$state['STATUS']['STATUS_IGNITION'] = 0;

$state['TEMP']['TEMP_OUT'] = 32;
$state['TEMP']['TEMP_IN'] = 24;
$state['TEMP']['TEMP_WATER'] = 12;
$state['TEMP']['TEMP_FRIDGE'] = 4;

$state['_DESC']['ALL_ALL'] = 'All';
$state['_DESC']['ALL_ALL_OFF'] = 'All Off';

$state['_DESC']['LIGHT_ALL'] = 'All Lights';
$state['_DESC']['LIGHT_ALL_ON'] = 'On';
$state['_DESC']['LIGHT_ALL_OFF'] = 'Off';
$state['_DESC']['LIGHT_SIDE'] = 'Side Light';
$state['_DESC']['LIGHT_FRONT'] = 'Front Light';
$state['_DESC']['LIGHT_LED'] = 'LED Light';

$state['_DESC']['POWER_ALL'] = 'All Power';
$state['_DESC']['POWER_ALL_OFF'] = 'Power Off';
$state['_DESC']['POWER_FRIDGE'] = 'Fridge';
$state['_DESC']['POWER_COFFEE'] = 'Coffee';
$state['_DESC']['POWER_COOKER'] = 'Cooker';

$state['_DESC']['STATUS_INVERTOR'] = 'Invertor';
$state['_DESC']['STATUS_HEATER'] = 'Heater';
$state['_DESC']['STATUS_IGNITION'] = 'Igntion';

$state['_DESC']['TEMP_OUT'] = 'Outside';
$state['_DESC']['TEMP_IN'] = 'Inside';
$state['_DESC']['TEMP_WATER'] = 'Water';
$state['_DESC']['TEMP_FRIDGE'] = 'Fridge';




// Save current state to text file
$arrayText = json_encode($state);

$fp = fopen($textFile, 'w');
fwrite($fp, $arrayText);
fclose($fp);

echo var_dump($state);

echo '' ;

echo 'OK - written to ', $textFile ;

?>


