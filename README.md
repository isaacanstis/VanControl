# VanControl
Van 230 / 24v Control, remote temp logging, WebUI, and whatever else i can think of

## Latest Functional Notes:
**Bootstrap UI, buttons function as expected, state stored on server, works with multiple clients connected, functional on phone, PC, and RPi Touchscreen.**

* State stored on server as state.JSON text file. 
* index.php populates buttons on load according to the current state.JSON file
* setup.php creates the default state.JSON file
* read.php displays formatted current JSON file
* button.php has the "templates" for creating the button HTML
* data.PHP opens file, handles the update from client if required (?X=..), sends updated JSON string to client, overwrites file
* button.js reads JSON on load / every second, updates all buttons to current state, primes for change.
  * On button press - requests from data.php along with button input.
  * Parses JSON response - refreshes all button html
  * Alert box states change, "fades in/out" using non-jQuery code

### Todo - to make work
* Update temperatures / Status
* Python read state file
* Ardunio / RPi read 1-wire temp sensors
* Ardunio / RPi set IO port - i2C extender or remote Arduino (serial via USB? Handles power, comms, sheilding, error checking)
* Wire Relays
* Wire Temp sensors
* Wire current sensors


### Todo - nice to have
* Node.JS or a more efficient state change checker? (something to push client refresh if another client updates)
* State stored in DB? Not sure if faster
* Temp history graph
* Night / Day mode
* Re-order state file to more object based
* Define more of UI from state file.
* look into sensor CAN / LIN bus?
* Connect to Sprinter CAN bus?
* Custom Relay PCB? (i2c / other interface, ATTiny or IO board?, Relay (SSR?), Current / Voltage sensor INA219, modular)
* Migrate to WRT54G, include 3g module?
* Connect to Solar charge controller? (appears a serial port on the PCB)





## Plan
### Concept
* Being able to turn lights on / off from multiple points in the van (not stressed about remote acess)
* Being able to control high voltage stuff via relays as well (inverter limited - ideally ability to turn fridge off when running the cooker / coffee machine.
 
### Hardware
* Main Server / Display Raspberry Pi 3 with 7" Raspberry Pi touchscreen
* Additional displays - Android phones / tablets
* Sensors - Ardunio Nanos communicating via I2C or Serial to the Raspberry pi


### Software
* Apache 2 webserver with PHP
* Bootstrap to make pretty
* JavaScript for flashy buttons
* AJAX to communicate data
* Data passed in JSON format
* Current State data saved as JSON text (For now) on server
* Python(?) or Bash for communicating with RPi GPIO
* Python(?) for communicating with sensor nodes
