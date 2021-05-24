<h3>Modifier le poste: <?php echo $id2 ?></h3>

<form action="./?action=redupdateposte&nPoste=<?php echo $id2 ?>" method="POST">
        
  <div class="content">
      <div class="container-fluid">
        
        <div class="form-group">
          <label for="Update_nomPoste">Nom du poste :</label>
          <input type="text" maxlength="20"  name="Update_nomPoste" class="form-control" id="Update_nPoste" placeholder="Entrez le nouveau nom du poste">
        </div>

        <!-- ComboBox IP -->
        <div class="form-group">
          <label for="Update_indIP">IP :</label>
          <select class="form-control" name="Update_indIP" id="Update_indIP">
            <?php $SegmentManager1->getComboBoxSegment() ?>  
          </select>
        </div>


        <div class="form-group">
          <label for="Update_ad">AD :</label>
          <input type="text" maxlength="3" name="Update_ad" class="form-control" id="Update_ad" placeholder="Entrez le nouveau ad">
        </div>

        <!-- ComboBox Type Poste -->
        <div class="form-group">
          <label for="Update_TP">Type Poste :</label>
          <select class="form-control" name="Update_TP" id="Update_TP">
            <?php $TypeManager1->getComboBoxType() ?>
          </select>
        </div>

        <!-- ComboBox n°Salle -->
        <div class="form-group">
          <label for="Update_nSalle">n°Salle :</label>
          <select class="form-control" name="Update_nSalle" id="Update_nSalle">
            <?php $SalleInfoManager1->getComboBoxSalleInfo();?>
          </select>
        </div>
        
        <!-- entre 0 et 255 -->
        <div class="form-group">
          <label for="Update_nbLog">Nombre de logiciel (0 à 127) :</label>
          <input type="number" min="0" max="127" name="Update_nbLog" class="form-control" id="Update_nbLog" placeholder="Sélectionnez le nouveau nombre de logiciel (de 0 à 127)" >
        </div> 


        <div>
          <button type="submit"> Modifier </button>
        </div>  
      </div>
  </div>
</form>
