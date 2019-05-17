
<div class="container">

	<h2>Mon compte</h2>
	<form role="form" method="post" action="<?php echo base_url('user/updateAccount');?>">

		<div class="form-group ">
			<label for="nom" class="col-sm-2 control-label">Licence :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" value="<?php echo $license; ?>" name="license" id="license" disabled>
			</div>
		</div>

		<div class="form-group ">
			<label for="lastname" class="col-sm-2 control-label">Nom :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" value="<?php echo $lastname; ?>"name="lastname" id="lastname">
			</div>
		</div>

		<div class="form-group" >
			<label for="firstname" class="col-sm-2 control-label">Prenom :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" value="<?php echo $firstname; ?>"name="firstname" id="firstname">
			</div>
		</div>
		<div class="form-group">
			<label for="nom" class="col-sm-2 control-label">Date de naissance :</label>
			<div class="col-sm-8">
				<input type="date" class="form-control" value="<?php echo $birth; ?>"name="birth" id="birth">
			</div>
		</div>


		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email :</label>
			<div class="col-sm-8">
				<input type="email" class="form-control" value="<?php echo $email; ?>"name="email" id="email">
			</div>
		</div>

		<div class="form-group">
			<label for="phone" class="col-sm-2 control-label">Mobile :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" value="<?php echo $phone; ?>"name="phone" id="phone">
			</div>
		</div>

		<div class="form-group">
			<label for="adress" class="col-sm-2 control-label">Adresse</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" value="<?php echo $adress; ?>"name="adress" id="adress">
			</div>
		</div>

		<div class="form-group">
			<label for="postalcode" class="col-sm-2 control-label">Code Postal</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" value="<?php echo $postalcode; ?>"name="postalCode" id="postalCode">
			</div>
		</div>

		<div class="form-group">
			<label for="city" class="col-sm-2 control-label">Ville</label>
			<div class="col-sm-8">
				<input type="text" name="city" value="<?php echo $city; ?>"class="form-control" id="city">
			</div>
		</div>

		<button type="submit" class="btn btn-primary mb-2">Modifier</button>

	</form>

</div>
