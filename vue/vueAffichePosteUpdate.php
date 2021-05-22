  <div class="content">
    <div class="container-fluid">
      <div class="header">
        <h4 class="title">Liste des Postes</h4>
        <h5 class="title">Cliquez sur le poste à modifier :</h5>      
      </div>
      <div class="toggle">
        <div class="content">
          <table id="datatables_poste" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%; text-align: center;">
            <thead>
              <tr>
                <th class="text-center">n°Poste</th>
                <th class="text-center">Nom Poste</th>
                <th class="text-center">IP</th>
                <th class="text-center">AD</th>
                <th class="text-center">Type Poste</th>
                <th class="text-center">n°Salle</th>
                <th class="text-center">Nombre Logiciel</th>
              </tr>
            </thead>
            <tbody>
            <?php
              foreach ($lespostes as $leposte)  
              {
            ?>
            <tr>
              <td class="edit"><?php echo $leposte->getNPoste() ?></td>
              <td class="edit"><?php echo $leposte->getNomPoste() ?></td>    
              <td class="edit"><?php echo $leposte->getindIPoste() ?></td>    
              <td class="edit"><?php echo $leposte->getAd() ?></td>    
              <td class="edit"><?php echo $leposte->getTypePoste() ?></td>    
              <td class="edit"><?php echo $leposte->getNSallePoste() ?></td>    
              <td class="edit"><?php echo $leposte->getNbLog() ?></td>
              <?php } ?>        
            </tr>
            </tbody>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables_poste').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "Toutes"]
      ],
      responsive: true,
      "language": {
      "sEmptyTable":     "Aucune donnée disponible dans le tableau",
      "sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
      "sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
      "sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
      "sInfoPostFix":    "",
      "sInfoThousands":  ",",
      "sLengthMenu":     "Afficher _MENU_ éléments",
      "sLoadingRecords": "Chargement...",
      "sProcessing":     "Traitement...",
      "sSearch":         "Rechercher :",
      "sZeroRecords":    "Aucun élément correspondant trouvé",
      "oPaginate": {
        "sFirst":    "Premier",
        "sLast":     "Dernier",
        "sNext":     "Suivant",
        "sPrevious": "Précédent"
      },
      "oAria": {
        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
        "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
      },
      "select": {
          "rows": {
            "_": "%d lignes sélectionnées",
            "0": "Aucune ligne sélectionnée",
            "1": "1 ligne sélectionnée"
            }
      }
                 
    }
  });
  var table = $('#datatables_poste').DataTable();

  table.on('click', '.edit', function() {
    $tr = $(this).closest('tr');

    if ($tr.hasClass('child')) {
      $tr = $tr.prev('.parent');
    }

    var data = table.row($tr).data();
    var myWindow = window.open("?action=redupdateposte&nPoste="+ data[0], "_self");
  });













})
</script>


