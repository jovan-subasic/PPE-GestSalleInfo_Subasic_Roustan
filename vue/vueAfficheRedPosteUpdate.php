<form action="./?action=redupdateposte&nPoste=<?php echo $id2 ?>" method="POST">
  <div class="form-group">
    <label for="Update_nomPoste">Nom du poste :</label>
    <input type="text" name="Update_nomPoste" class="form-control" id="Update_nPoste" placeholder="Entrez le nouveau nom du poste">
  </div>


  <div class="form-group">
    <label for="Update_indIP">indIP :</label>
    <select class="form-control" name="Update_indIP" id="Update_indIP">
      <?php $SegmentManager1->getComboBoxSegment() ?>  
    </select>
  </div>


  <div class="form-group">
    <label for="Update_ad">AD :</label>
    <input type="text" name="Update_ad" class="form-control" id="Update_ad" placeholder="Entrez le nouveau ad">
  </div>


  <div class="form-group">
    <label for="Update_TP">Type Poste :</label>
    <select class="form-control" name="Update_TP" id="Update_TP">
      <?php $TypeManager1->getComboBoxType() ?>
    </select>
  </div>


  <div class="form-group">
    <label for="Update_nSalle">n°Salle :</label>
    <select class="form-control" name="Update_nSalle" id="Update_nSalle">
      <?php $SalleInfoManager1->getComboBoxSalleInfo();?>
    </select>
  </div>
  
  
  <div class="form-group">
    <label for="Update_nbLog">Nombre de logiciel :</label>
    <input type="text" name="Update_nbLog" class="form-control" id="Update_nbLog" placeholder="Entrez le nouveau nombre de logiciel">
  </div> 


  <div>
    <button type="submit"> Modifier le poste n°<?php echo $id2?> </button>
  </div>  
  
</form>
