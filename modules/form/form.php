<?php
	$group_class = trim($class) == 'form--horizontal' ? 'form__horizontal-input' : '';
	$partials = array(
		'form--inline' => 'form-inline.php',
		'form__checkbox--inline' => 'form-checkbox-inline.php'
	);
	if ( array_key_exists(trim($class), $partials) ) {
		require $partials[trim($class)];
	} else {
?>
<div class="form<?php echo $class; ?>">
	<form action="#">
		<div class="form__group">
			<label for="<?php echo $class; ?>-exampleInputEmail1">Email address</label>
			<div class="<?php echo $group_class; ?>">
				<input type="email" class="form__control" id="exampleInputEmail1" placeholder="Email">
			</div>
		</div>
		<div class="form__group">
			<label for="<?php echo $class; ?>-exampleInputPassword1">Password</label>
			<div class="<?php echo $group_class; ?>">
				<input type="password" class="form__control" id="exampleInputPassword1" placeholder="Password">
			</div>
		</div>
		<div class="form__group">
			<label for="<?php echo $class; ?>-exampleInputFile">File input</label>
			<div class="<?php echo $group_class; ?>">
				<input type="file" id="exampleInputFile">
				<p class="form__help">Example block-level help text here.</p>
			</div>
		</div>
		<div class="form__group">
			<div class="<?php echo $group_class; ?>">
				<textarea class="form__control" rows="5" placeholder="Textarea"></textarea>
			</div>
		</div>
		<div class="form__group">
			<div class="<?php echo $group_class; ?>">
				<select class="form__control form-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
		</div>
		<div class="form__group">
			<div class="<?php echo $group_class; ?>">
				<select multiple="" class="form__control form-select">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
				<p class="form__help">Pick one of those options</p>
			</div>
		</div>
		<div class="form__group">
			<div class="<?php echo $group_class; ?>">
				<div class="form__checkbox form-check">
					<input type="checkbox" class="form-check__control" id="<?php echo $class; ?>-check1" aria-labelledby="<?php echo $class; ?>-checklabel1" />
					<label class="form-check__label" for="<?php echo $class; ?>-check1" id="<?php echo $class; ?>-checklabel1">Remember me</label>
				</div>
				<div class="form__checkbox form-check">
					<input type="checkbox" class="form-check__control" id="<?php echo $class; ?>-check2" aria-labelledby="<?php echo $class; ?>-checklabel2" />
					<label class="form-check__label" for="<?php echo $class; ?>-check2" id="<?php echo $class; ?>-checklabel2">Send me spam all the time</label>
				</div>
			</div>
		</div>
		<div class="form__group">
			<div class="<?php echo $group_class; ?>">
				<div class="form__radio form-check form-check--radio">
					<input type="radio" name="radios1" class="form-check__control" id="<?php echo $class; ?>-radio1" aria-labelledby="<?php echo $class; ?>-radiolabel1" />
					<label class="form-check__label" for="<?php echo $class; ?>-radio1" id="<?php echo $class; ?>-radiolabel1">Remember me</label>
				</div>
				<div class="form__radio form-check form-check--radio">
					<input type="radio" name="radios1" class="form-check__control" id="<?php echo $class; ?>-radio2" aria-labelledby="<?php echo $class; ?>-radiolabel2" />
					<label class="form-check__label" for="<?php echo $class; ?>-radio2" id="<?php echo $class; ?>-radiolabel2">Send me spam all the time</label>
				</div>
			</div>
		</div>
		<div class="<?php echo $group_class; ?>">
			<button type="submit" class="button">Submit</button>
		</div>
	</form>
</div>
<?php } ?>
