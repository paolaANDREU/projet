<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">

	<h1>Mes match à venir</h1>

	<table class="table">
		<thead>
			<tr>
				<th>Date</th>
				<th>Heure</th>
				<th>Equipe adverse</th>
				<th>Lieu</th>
				<th>Participation</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($matchs as $value) {
				echo "<tr>";
				echo "<td>".$value->date."</td>";
				echo "<td> ".$value->hour."</td>";
				echo "<td>".$value->oppositeteamcity."</td>";
				if ($value->athome==true) {
					echo "<td> Montarnaud </td>";
				}else {
					echo "<td>".$value->oppositeteamcity."</td>";
				}

				echo "<td><button type='button' id='demo' onclick='myFunction()'value=".$value->idmatch."class='btn btn-success'>Je participe</button></td>";
				echo "<tr>";
			} ?>

		</tbody>
	</table>
</div>

<script>
document.getElementById("demo").onclick = function() {myFunction()};

function myFunction() {
	if (document.getElementById("demo").innerHTML == "Je participe") {
		document.getElementById("demo").innerHTML = "Annuler";
	}else {
		document.getElementById("demo").innerHTML = "Je participe";
	}
}
</script>
