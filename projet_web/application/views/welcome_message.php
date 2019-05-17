<div class="container">
	<h2>Tableau des matchs</h2>
	<table class="table">
		<thead>
			<tr>
				<th>Date</th>
				<th>Heure</th>
				<th>Categorie</th>
				<th>Equipe adverse</th>
				<th>Lieu</th>
			</tr>
		</thead>

		<tbody>
			<?php
			foreach ($matchs->result() as $value) {
				echo "<tr>";
				echo "<td>".$value->date."</td>";
				echo "<td>".$value->hour."</td>";
				echo "<td>".$value->description."</td>";
				echo "<td>".$value->oppositeteamcity."</td>";
				if ($value->athome==true) {
					echo "<td>Montarnaud</td>";
				}else {
					echo "<td>".$value->oppositeteamcity."</td>";
				}
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</div>
