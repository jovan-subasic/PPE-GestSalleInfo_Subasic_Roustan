<h3>Modifier le poste: <?php echo $id2 ?></h3>

<form action="./?action=redupdateposte&nPoste=<?php echo $id2 ?>" method="POST">
        
  <div class="content">
      <div class="container-fluid">
        
        <div class="form-group">
          <label for="Update_nomPoste">Nom du poste :</label>
          <input type="text" maxlength="20"  name="Update_nomPoste" value="<?php echo $donneesPoste['nomPoste'] ?>" class="form-control" id="Update_nPoste">
        </div>

        <!-- ComboBox IP -->
        <div class="form-group">
          <label for="Update_indIP">IP :</label>
          <select class="form-control" name="Update_indIP" id="Update_indIP">
          <option value="<?php echo $donneesPoste['indIP']; ?>"> <?php echo $donneesPoste['indIP'] ?> </option>
          <?php
            foreach ($IP as $IPS)
            {
                ?>
                <option><?php echo $IPS->getindIP(); ?></option>
                <?php
            }
                ?> 
          </select>
        </div>


        <div class="form-group">
          <label for="Update_ad">AD :</label>
          <input type="text" value="<?php echo $donneesPoste['ad'] ?>" maxlength="3" name="Update_ad" class="form-control" id="Update_ad" >
        </div>

        <!-- ComboBox Type Poste -->
        <div class="form-group">
          <label for="Update_TP">Type Poste :</label>
          <select class="form-control" name="Update_TP" id="Update_TP">
          <option value="<?php echo $donneesPoste['typePoste']; ?>"> <?php echo $donneesPoste['typePoste'] ?> </option>
          <?php
            foreach ($type as $types)
            {
                ?>
                <option><?php echo $types->gettypeLP(); ?></option>
                <?php
            }
                ?>
          </select>
        </div>

        <!-- ComboBox n°Salle -->
        <div class="form-group">
          <label for="Update_nSalle">n°Salle :</label>
          <select class="form-control" name="Update_nSalle" id="Update_nSalle">
          <option value="<?php echo $donneesPoste['nSalle']; ?>"> <?php echo $donneesPoste['nSalle'] ?> </option>
          <?php
            foreach ($nSalle as $nSalles)
            {
                ?>
                <option><?php echo $nSalles->getNSalle(); ?></option>
                <?php
            }
                ?>
          </select>
        </div>
        
        <!-- entre 0 et 127 -->
        <div class="form-group">
          <label for="Update_nbLog">Nombre de logiciel (0 à 127) :</label>
          <input type="number"  min="0" max="127" name="Update_nbLog" class="form-control" id="Update_nbLog" value="<?php echo $donneesPoste['nbLog'] ?>" >
        </div> 


        <div>
          <button type="submit" name="modifier"> Modifier </button>
        </div>  
      </div>
  </div>
</form>
