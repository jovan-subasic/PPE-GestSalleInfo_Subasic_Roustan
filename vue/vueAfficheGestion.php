

<h3>Ajouter un poste:</h3>

<form action="./?action=gestion" method="POST">

<p>
    
    <input type="text" name="Enter_nPoste" placeholder="Numéro du poste" />
    
    <input type="text" name="Enter_nomPoste" placeholder="Nom de poste" />
    
    <input type="text" name="Enter_indIP" placeholder="indIP" />
    
    <input type="text" name="Enter_ad" placeholder="ad" />
    
    <input type="text" name="Enter_typePoste" placeholder="Type de poste" />
    
    <?php
    /*Combo Box*/
    /*<input type=text list=browsers >
        <datalist id=browsers >
            <option> BeOs
            <option> NC
            <option> PCNT
            <option> PCWS
            <option> TX
            <option> UNIX
    </datalist>*/ ?>
   
    <input type="text" name="Enter_nSalle" placeholder="Numéro salle où sera situé le Poste" />
    
    
    
    <button type="submit"> Créer le Poste </button>

</p>

</form>

<pre>
    <?php var_dump($_POST)?>
</pre>

<form action="./?action=redupdateposte" method="POST">
  <div class="form-group">
    <label for="Update_nPoste">Nom du poste :</label>
    <input type="text" name="Update_nPoste" class="form-control" id="Update_nPoste" placeholder="Entrez le nouveau nom du poste">
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
  
  <!-- entre 0 et 255 -->
  <div class="form-group">
    <label for="Update_nLog">Nombre de logiciel :</label>
    <input type="text" name="Update_nLog" class="form-control" id="Update_nLog" placeholder="Entrez le nouveau nombre de logiciel">
  </div>
</form>