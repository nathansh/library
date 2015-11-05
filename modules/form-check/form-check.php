<?php
	$type = trim($class) == 'form-check--radio' ? 'radio' : 'checkbox';
?>
<form>
	<div class="form__checkbox form__checkbox--inline form-check<?php echo $class ?>">
		<input type="<?php echo $type; ?>" name="<?php echo $type; ?>-inputs" class="form-check__control" id="<?php echo $type; ?>-1" aria-labelledby="<?php echo $type; ?>-label-1" />
		<label class="form-check__label" for="<?php echo $type; ?>-1" id="<?php echo $type; ?>-label-1">Remember me</label>
	</div>
	<div class="form__checkbox form__checkbox--inline form-check<?php echo $class ?>">
		<input type="<?php echo $type; ?>" name="<?php echo $type; ?>-inputs" class="form-check__control" id="<?php echo $type; ?>-2" aria-labelledby="<?php echo $type; ?>-label-2" />
		<label class="form-check__label" for="<?php echo $type; ?>-2" id="<?php echo $type; ?>-label-2">Send me spam all the time</label>
	</div>
</form>
