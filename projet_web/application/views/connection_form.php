
<div class="container" id='connection'>
	<h2>Connexion</h2>

	<?php echo form_open('user/login'); ?>
	
	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	</div>

	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
	</div>

	<button type="submit" class="btn btn-default">Submit</button>
	<?php echo form_close(); ?>
</div>
