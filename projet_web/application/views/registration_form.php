
<div class="container">

	<h2>S'inscrire</h2>
	<form role="form" method="post" action="<?php echo base_url('registration');?>">

		<div class="form-group ">
			<label for="nom" class="col-sm-2 control-label">Licence :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="5 chiffres" name="license" id="license" >
			</div>
		</div>

		<div class="form-group ">
			<label for="lastname" class="col-sm-2 control-label">Nom :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="Nom"name="lastname" id="lastname">
			</div>
		</div>

		<div class="form-group" >
			<label for="firstname" class="col-sm-2 control-label">Prenom :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="Prenom"name="firstname" id="firstname">
			</div>
		</div>

		<div class="form-group">
			<label for="nom" class="col-sm-2 control-label">Date de naissance :</label>
			<div class="col-sm-8">
				<input type="date" class="form-control" name="birth" id="birth">
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email :</label>
			<div class="col-sm-8">
				<input type="email" class="form-control" placeholder="Email"name="email" id="email">
			</div>
		</div>

		<div class="form-group">
			<label for="phone" class="col-sm-2 control-label">Mobile :</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="10 chiffres"name="phone" id="phone">
			</div>
		</div>

		<div class="form-group">
			<label for="adress" class="col-sm-2 control-label">Adresse</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="20 rue des oliviers"name="adress" id="adress">
			</div>
		</div>

		<div class="form-group">
			<label for="postalcode" class="col-sm-2 control-label">Code Postal</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" placeholder="5 chiffres"name="postalCode" id="postalCode">
			</div>
		</div>

		<div class="form-group">
			<label for="city" class="col-sm-2 control-label">Ville</label>
			<div class="col-sm-8">
				<input type="text" name="city" placeholder="Montarnaud"class="form-control" id="city">
			</div>
		</div>

		<div class="form-group">
			<label for="password" class="col-sm-2 control-label">Mot de passe</label>
			<div class="col-sm-8">
				<input type="password" name="password" class="form-control" placeholder="Mot de passe" id="password">
			</div>
		</div>
		
		<div class="form-group">
			<select class="form-control" name="select">
				<option value='player'>Joueur</option>
				<option value='coach'>Encadrant</option>
			</select>
		</div>

		<div class="form-group">
			Catégorie :
			<select class="form-control" name="categorie">
				<?php foreach ($data as $value) {
					echo "<option value=".$value['idclass'].">".$value['description']."</option>";
				} ?>
			</select>
		</div>

		<button type="submit" class="btn btn-primary mb-2">Valider</button>

	</form>

</div>
