<?php 
 $date = date('Y-m-d H:i');
 ?>
<html lang="en">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Control Panel for Sprinter" />
    <meta name="author" content="Isaac Anstis" />
    <title>Sprinter Control Panel</title>
    <!-- Bootstrap -->
    <link href="css/darkly-bootstrap.min.css" rel="stylesheet" />
    <script src="toggle.js"></script>
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
                <p class="navbar-text">
                  <b>
                    <?=$date;?>
                    </b>
                </p>
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
                  <div class="col-xs-6">
                    <button type="button" id="All_Light_On" onclick="toggleAllLightsOn()"
                    class="btn btn-block btn-lg btn-warning">On</button>
                  </div>
                  <div class="col-xs-6">
                    <button type="button" id="All_Light_Off" onclick="toggleAllLightsOff()"
                    class="btn btn-block btn-lg btn-warning">Off</button>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <button type="button" id="Light_LED" onclick="toggleSwitch(this)" class="btn btn-lg btn-block btn-default">LED
                Strip</button>
              </li>
              <li class="list-group-item">
                <button type="button" id="Light_Front" onclick="toggleSwitch(this)" class="btn btn-lg btn-block btn-default">Front
                Light</button>
              </li>
              <li class="list-group-item">
                <button type="button" id="Light_Side" onclick="toggleSwitch(this)" class="btn btn-lg btn-block btn-default">Side
                Light</button>
              </li>
            </ul>
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
                    <button type="button" id="All_Power_On" onclick="toggleAllPowerOn()"
                    class="btn btn-block btn-lg btn-default" disabled="disabled">On</button>
                  </div>
                  <div class="col-xs-6">
                    <button type="button" id="All_Power_Off" onclick="toggleAllPowerOff()"
                    class="btn btn-block btn-lg btn-warning">Off</button>
                  </div>
                </div>
				
				
              </li>
              <li class="list-group-item">
                <button type="button" id="Pwr_Fridge" onclick="toggleSwitch(this)"
                class="btn btn-lg btn-block btn-default">Fridge</button>
              </li>
              <li class="list-group-item">
                <button type="button" id="Pwr_Cooker" onclick="toggleSwitch(this)"
                class="btn btn-lg btn-block btn-default">Cooker</button>
              </li>
              <li class="list-group-item">
                <button type="button" id="Pwr_Coffee" onclick="toggleSwitch(this)" class="btn btn-lg btn-block btn-default">Coffee
                Machine</button>
              </li>
            </ul>
          </div>
        </div>
        <div class='col-sm-4'>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Status</h3>
            </div>
            <table class='table'>
              <tbody>
                <tr>
                  <th>Inverter</th>
                  <th><span class="label label-primary">On</span></th>
                </tr>
                <tr>
                  <th>Heating</th>
                  <th><span class="label label-default">Off</span></th>
                </tr>
                <tr>
                  <th>Ignition</th>
                  <th><span class="label label-primary">On</span></th>
                </tr>
              </tbody>
            </table>
          </div>
          
		   <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Temperature</h3>
            </div>
            <table class='table'>
              <tbody>
                <tr>
                  <th>Internal</th>
                  <th>12 deg C</th>
                </tr>
                <tr>
                  <th>External</th>
                  <th>24 deg C</th>
                </tr>
                <tr>
                  <th>Fridge</th>
                  <th>0.4 deg C</th>
                </tr>
                <tr>
                  <th>Water</th>
                  <th>0.4 deg C</th>
                </tr>
              </tbody>
            </table>
          </div>
		  
		  
		  
        </div>
      </div>
    </div>
  </body>
</html>
