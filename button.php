<?php 


function mainButton($id, $label) {
?>
			  <li class="list-group-item" id="<?php echo $id; ?>">
				  	  <button type="button" onclick="setState('<?php echo $id; ?>')"  class="btn btn-lg btn-block btn-default"><?php echo $label; ?></button>
			  </li>
<?php
}

function allButton($id, $label) {
	?>
					<div class="col-xs-6">
						<button type="button" id="<?php echo $id; ?>" onclick="setState('<?php echo $id; ?>')"
							class="btn btn-block btn-lg btn-warning"><?php echo $label; ?></button>
					</div>
<?php
}

function statusRow($id, $label, $value) {
	echo '<tr><th>'.$label.'</th>';
	echo '<th><b><span id="'.$id.'" class="label label-primary">';
	if ($value == 1) { echo 'ON'; } else { echo 'OFF'; }
	echo '</span></b></th></tr>';
}

function tempRow($id, $label, $value) {
	echo '<tr><th>'.$label.'</th>';
	echo '<th><div id="'.$id.'">'.$value.' deg C</div></th></tr>';
}
?>