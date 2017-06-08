window.onload = updateScreen();
window.setInterval(updateScreen,1000);

function updateScreen()
{
	setState('');
}


function setState(id) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = onResponse;
	var requestString = "data.php?x=" + id;
	xmlhttp.open("GET", requestString, true);
	xmlhttp.send();

	return true;

}


function onResponse() {
		if (this.readyState == 4 && this.status == 200) {	
			var myObj = JSON.parse(this.responseText);
			if (myObj.responseText.length > 1) {
				document.getElementById("responseWindow").innerHTML =  myObj.responseText;
				document.getElementById("responseWindow").hidden = '';
			}
			updateButtons(myObj);
			setTimeout(function() {
				document.getElementById("responseWindow").hidden = "hidden";
			}, 2000);
		}
}



function updateButtons(stateObject)
{
		//document.getElementById(dateTimeSpot).innerHTML = " " + Date().toLocaleString();
		
		for (x in stateObject['LIGHT'])
		{
			var out = buttonHTML(x,stateObject['_DESC'][x],stateObject['LIGHT'][x]);
			document.getElementById(x).innerHTML = out;
		}
		
		for (x in stateObject['POWER'])
		{
			var out = buttonHTML(x,stateObject['_DESC'][x],stateObject['POWER'][x]);
			document.getElementById(x).innerHTML = out;
		}
	
}








function buttonHTML(id, label, value){
	if (value == 1) {
		return buttonOn(id, label);
	}
	else {
		return buttonOff(id, label);
	}
}


function buttonOn(id, label) {
	var content = "<button type=\"button\" onclick=\"setState('" + id + "_OFF')\"  class=\"btn btn-lg btn-block btn-primary\">" + label + "</button>";
	return content;
}

function buttonOff(id, label) {
	var content = "<button type=\"button\" onclick=\"setState('" + id + "_ON')\"  class=\"btn btn-lg btn-block btn-default\">" + label + "</button>";
	return content;
}