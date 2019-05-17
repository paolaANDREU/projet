<div class="container">
  <h2>Ajout Match</h2>
  <?php echo form_open('coach/add_match'); ?>

  <div class="form-group">
    Catégorie :
    <select class="form-control" name="categorie">
      <?php foreach ($data as $value) {
        echo "<option value=".$value['idclass'].">".$value['description']."</option>";
      } ?>
    </select>
  </div>

  <div class="form-group">
    <label for="nom" class="col-sm-2 control-label">Date :</label>
    <div class="col-sm-8">
      <input type="date" class="form-control" name="date" id="date">
    </div>
  </div>

  <div class="form-group">
    <label for="nom" class="col-sm-2 control-label">heure :</label>
    <div class="col-sm-8">
      <input type="time" min="9:00" max="22:00" class="form-control" name="hour" id="hour">
    </div>
  </div>

  <div class="form-group" >
    <label for="" class="col-sm-2 control-label">Equipe adverse (entrez la ville du club) :</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="oppositeteam" id="oppositeteam">
    </div>
  </div>

  <div class="form-group">
    <label >Nombre de joueurs requis :</label>
    <input type="number" class="form-control" id="number" min="7" id="numberplayer" name="numberplayer">
  </div>

  <div class="form-group">
    <select class="form-control" name="athome">
      <option value='true'>Domicile</option>
      <option value='false'>Exterieur</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-default">Enregistrer</button>
  <?php echo form_close(); ?>
</div>
