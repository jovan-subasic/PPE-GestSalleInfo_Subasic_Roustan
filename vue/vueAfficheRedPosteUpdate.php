<form action="./?action=redupdateposte&nPoste=<?php echo $id2 ?>" method="POST">
  <!-- <div class="form-group">
    <label for="Update_nomPoste">Nom du poste :</label>
    <input type="text" name="Update_nomPoste" class="form-control" id="Update_nPoste" placeholder="Entrez le nouveau nom du poste">
  </div>
  <div class="form-group">
    <label for="Update_indIP">indIP :</label>
    <select class="form-control" name="Update_indIP" id="Update_indIP">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Update_ad">AD :</label>
    <input type="text" name="Update_ad" class="form-control" id="Update_ad" placeholder="Entrez le nouveau ad">
  </div>
  <div class="form-group">
    <label for="Update_TP">Type Poste :</label>
    <select class="form-control" name="Update_TP" id="Update_TP">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Update_nSalle">n°Salle :</label>
    <select class="form-control" name="Update_nSalle" id="Update_nSalle">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  
  
  <div class="form-group">
    <label for="Update_nLog">Nombre de logiciel :</label>
    <input type="text" name="Update_nLog" class="form-control" id="Update_nLog" placeholder="Entrez le nouveau nombre de logiciel">
  </div> -->
    
  <input type="text" name="Update_nomPoste" placeholder="Nom de poste" />
    
  <input type="text" name="Update_indIP" placeholder="indIP" />
    
  <input type="text" name="Update_ad" placeholder="ad" />
    
  <input type="text" name="Update_TP" placeholder="Type de poste" />
   
  <input type="text" name="Update_nSalle" placeholder="Numéro salle où sera situé le Poste" />
    
  <input type="text" name="Update_nbLog" placeholder="Nombre de logiciels" />

  <button type="submit"> Modifier le poste n°<?php echo $id2?> </button>
</form>
