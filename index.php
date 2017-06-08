<?php 
 $textFile = 'state.JSON';
 $writeOK = 'WRITE_OK';

 
 include('button.php');

// Open textfile
$fp = fopen($textFile, 'r');
$arrayText = fread($fp, 4096);
fclose($fp);
$stateObj = json_decode($arrayText, true);

 ?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Control Panel for Sprinter" />
    <meta name="author" content="Isaac Anstis" />
    <title>Sprinter Control Panel</title>
    <!-- Bootstrap -->
    <link href="css/darkly-bootstrap.min.css" rel="stylesheet" />
    <script src="button.js"></script>
	
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Sprinter Control</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <b><p id="dateTimeSpot" class="navbar-text">
                  
                </p></b>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class='container' style="padding-top: 70px">
      <div class='row'>
        <div class='col-sm-4'>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Lights</h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">
                <div class='row'>	
<?php 				
allButton('LIGHT_ALL_ON', $stateObj["_DESC"]['LIGHT_ALL_ON'], false);
allButton('LIGHT_ALL_OFF', $stateObj["_DESC"]['LIGHT_ALL_OFF'], false);
?>				</div>
              </li>	  
<?php 			
foreach($stateObj["LIGHT"] as $thisTag => $tagVal){
	mainButton($thisTag, $stateObj["_DESC"][ $thisTag ]);
}?>            </ul>
          </div>
        </div>
        <div class='col-sm-4'>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Power</h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">
                 <div class='row'>
					<div class="col-xs-6">
					</div>
<?php
allButton('POWER_ALL_OFF', $stateObj["_DESC"]['POWER_ALL_OFF'], false);
?>                </div>
              </li>
<?php 
				
foreach($stateObj["POWER"] as $thisTag => $tagVal){
	mainButton($thisTag, $stateObj["_DESC"][ $thisTag ]);
	
}?>            </ul>
          </div>
        </div>
        <div class='col-sm-4'>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Status</h3>
            </div>
            <table class='table'>
              <tbody>

	<?php 			
	
	foreach($stateObj["STATUS"] as $thisTag => $tagVal){
		statusRow($thisTag, $stateObj["_DESC"][ $thisTag ], $tagVal);
		
	}?>			    
		  
              </tbody>
            </table>
          </div>
          
		   <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Temperature</h3>
            </div>
            <table class='table'>
              <tbody>
			  
	<?php 			
	
	foreach($stateObj["TEMP"] as $thisTag => $tagVal){
		tempRow($thisTag, $stateObj["_DESC"][ $thisTag ], $tagVal);
		
	}?>						  

              </tbody>
            </table>
          </div>
		  
		  
		  
        </div>
      </div>
	  <div id="responseWindow" class="alert alert-dismissable alert-info fade in" hidden="hidden">
		Message
	  </div>
	  
	</div>
  </body>
</html>
