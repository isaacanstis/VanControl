function toggleSwitch (thisItem) {
		
	
	
	if (isOn(thisItem)) {		
		// Turning on
		turnOff(thisItem);
				
	}
	else {
		turnOn(thisItem);
		
	}
	
}

function isOn(thisItem)
{
	if (thisItem.classList.contains('btn-primary')) {
		return true;
	}
	else {
		return false;
	}
}


function turnOff(thisItem) {
	thisItem.classList.remove('btn-primary')
	thisItem.classList.add('btn-default');
}

function turnOn(thisItem) {
	thisItem.classList.remove('btn-default')
	thisItem.classList.add('btn-primary');
}




function toggleAllLightsOn (){
	turnOn(document.getElementById("Light_LED"));
	turnOn(document.getElementById("Light_Front"));
	turnOn(document.getElementById("Light_Side"));
}

function toggleAllLightsOff (){
	turnOff(document.getElementById("Light_LED"));
	turnOff(document.getElementById("Light_Front"));
	turnOff(document.getElementById("Light_Side"));
}
function toggleAllPowerOn (){
	turnOn(document.getElementById("Pwr_Fridge"));
	turnOn(document.getElementById("Pwr_Cooker"));
	turnOn(document.getElementById("Pwr_Coffee"));
}

function toggleAllPowerOff (){
	turnOff(document.getElementById("Pwr_Fridge"));
	turnOff(document.getElementById("Pwr_Cooker"));
	turnOff(document.getElementById("Pwr_Coffee"));
}