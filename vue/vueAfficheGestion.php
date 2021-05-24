
<?php
if($UserManager->is_admin())
{  
?>
  <h3>Ajouter un poste:</h3>

  <!-- <pre>
      <?php //var_dump($_POST)?>
  </pre> -->

  <form action="./?action=gestion" method="POST">

    <div class="content">
      <div class="container-fluid">
        
          <div class="form-group">
            <label for="Add_nPoste">N° du poste :</label>
            <input type="text" maxlength="7" name="Add_nPoste" class="form-control" id="Add_nPoste" placeholder="Entrez le numéro du poste">
          </div>

          <div class="form-group">
            <label for="Add_nomPoste">Nom du poste :</label>
            <input type="text" maxlength="20" name="Add_nomPoste" class="form-control" id="Add_nomPoste" placeholder="Entrez le nom du poste">
          </div>

          <!-- ComboBox IP -->
          <div class="form-group">
            <label for="Add_indIP">IP :</label>
            <select class="form-control" name="Add_indIP" id="Add_indIP">
              <?php $SegmentManager->getComboBoxSegment() ?>
            </select>
          </div>

          <div class="form-group">
            <label for="Add_ad">AD :</label>
            <input type="text" maxlength="3" name="Add_ad" class="form-control" id="Add_ad" placeholder="Entrez l'ad">
          </div>

          <!-- ComboBox Type Poste -->
          <div class="form-group">
            <label for="Add_typePoste">Type Poste :</label>
            <select class="form-control" name="Add_typePoste" id="Add_typePoste">
              <?php $TypeManager->getComboBoxType() ?>
            </select>
          </div>

          <!-- ComboBox n°Salle -->
          <div class="form-group">
            <label for="Add_nSalle">n°Salle :</label>
            <select class="form-control" name="Add_nSalle" id="Add_nSalle">
              <?php $SalleInfoManager->getComboBoxSalleInfo();?>
            </select>
          </div>
          
          <!-- entre 0 et 255 -->
          <div class="form-group">
            <label for="Add_nbLog">Nombre de logiciel (0 à 127) :</label>
            <input type="number" min="0" max="127" name="Add_nbLog" class="form-control" id="Add_nbLog" placeholder="Sélectionnez le nombre de logiciel (possible de 0 à 127)">
          </div>


          <div class="form-group">
            <button type="submit"> Créer </button>
          </div>

      </div>
    </div>
  </form>
<?php
}
else
{
  echo "connexion d'administrateur requise";
}
?>