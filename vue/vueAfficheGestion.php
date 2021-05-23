

<h3>Ajouter un poste:</h3>

<form action="./?action=gestion" method="POST">

<p>
    
    <input type="text" name="Add_nPoste" placeholder="Numéro du poste" />
    
    <input type="text" name="Add_nomPoste" placeholder="Nom de poste" />
    
    <input type="text" name="Add_indIP" placeholder="indIP" />
    
    <input type="text" name="Add_ad" placeholder="ad" />
    
    <input type="text" name="Add_typePoste" placeholder="Type de poste" />
   
    <input type="text" name="Add_nSalle" placeholder="Numéro salle où sera situé le Poste" />
    
    <input type="text" name="Add_nbLog" placeholder="Nombre de logiciels" />
    
    
    
    <button type="submit"> Créer le Poste </button>

</p>

</form>

<pre>
    <?php var_dump($_POST)?>
</pre>

<form action="./?action=gestion" method="POST">
  <div class="content">
    <div class="container-fluid">
      
        <div class="form-group">
          <label for="Add_nPoste">N° du poste :</label>
          <input type="text" name="Add_nPoste" class="form-control" id="Add_nPoste" placeholder="Entrez le numéro du poste">
        </div>

        <div class="form-group">
          <label for="Add_nomPoste">Nom du poste :</label>
          <input type="text" name="Add_nomPoste" class="form-control" id="Add_nomPoste" placeholder="Entrez le nom du poste">
        </div>

        <div class="form-group">
          <label for="Add_indIP">IP :</label>
          <select class="form-control" name="Add_indIP" id="Add_indIP">
            <?php $SegmentManager->getSegment() ?>
          </select>
        </div>

        <div class="form-group">
          <label for="Add_ad">AD :</label>
          <input type="text" name="Add_ad" class="form-control" id="Add_ad" placeholder="Entrez l'ad">
        </div>

        
        <div class="form-group">
          <label for="Add_typePoste">Type Poste :</label>
          <select class="form-control" name="Add_typePoste" id="Add_typePoste">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>


        <div class="form-group">
          <label for="Add_nSalle">n°Salle :</label>
          <select class="form-control" name="Add_nSalle" id="Add_nSalle">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        
        <!-- entre 0 et 255 -->
        <div class="form-group">
          <label for="Add_nbLog">Nombre de logiciel :</label>
          <input type="text" name="Add_nbLog" class="form-control" id="Add_nbLog" placeholder="Entrez le nombre de logiciel">
        </div>


        <div class="form-group">
          <button type="submit"> Créer le Poste </button>
        </div>

    </div>
  </div>
</form>