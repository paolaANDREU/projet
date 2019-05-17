<div class="container">
  <h2>Ajout Catégorie</h2>
  <?php echo form_open('coach/add_class'); ?>

  <div class="form-group">
    Catégorie d'âge :
    <select class="form-control" name="categorie">
      <option value='Baby'>Baby</option>
      <option value='moins de 7'>moins de 7</option>
      <option value='moins de 9'>moins de 9</option>
      <option value='moins de 11'>moins de 11</option>
      <option value='moins de 13'>moins de 13</option>
      <option value='moins de 15'>moins de 15</option>
      <option value='moins de 18'>moins de 18</option>
      <option value='Senior'>Senior</option>
    </select>
  </div>

  <div class="form-group">
    <label >Numéro de l'équipe:</label>
    <input type="number" class="form-control" id="number" min="1" max="10"name="number">
  </div>

  <div class="form-group">
    Niveau :
    <select class="form-control" name="niveau">
      <option value='Loisir'>Loisir</option>
      <option value='Départemental'>Départemental</option>
      <option value='Régional'>Régional</option>
      <option value='National'>National</option>
    </select>
  </div>

  <button type="submit" class="btn btn-default">Enregistrer</button>
  <?php echo form_close(); ?>
</div>
