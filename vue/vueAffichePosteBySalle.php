<div class="content">
		<div class="container-fluid"> 
			<div class="header"><!---------------------------------------------Petit Materiel----------------------------------------------------------->
				<h4 class="title">Liste de poste dans la salle <?php echo  $id?>
</h4>
			</div>    
			<div class="toggle">
				<div class="content">
					<table id="datatables_salle" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%; text-align: center;"> 
						<thead>
							<tr>
								<th class="text-center">n°Poste</th>
								<th class="text-center">Nom du Poste</th>
								<th class="text-center">IP</th>
								<th class="text-center">ad</th>
								<th class="text-center">Type du Poste</th>
								<th class="text-center">Nombre de logiciel(s)</th>
								<!-- <th class="text-center">Action</th> -->
							</tr>
						</thead>
						<tbody>
						<?php
							foreach ($postes as $poste)
							{
						?> 
						<tr>
							<td class="edit"><?php echo $poste->getNPoste() ?></td>
							<td class="edit"><?php echo $poste->getNomPoste() ?></td>
							<td class="edit"><?php echo $poste->getindIPoste() ?></td>
							<td class="edit"><?php echo $poste->getAd() ?></td>
							<td class="edit"><?php echo $poste->getTypePoste() ?></td>
							<td class="edit"><?php echo $poste->getNbLog() ?></td> 
							<!-- <td class="text-right">
								<a href="#" class="btn-link btn-danger remove"><i class="fa fa-times"></i></a>
							</td> -->
							<?php } ?>
						</tr>
						</tbody>
					</table>
				</div>   
			</div>                                 
		</div>          
	</div>      



<script type="text/javascript">


    
    $(document).ready(function() {
        $('#datatables_salle').DataTable({
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
        

        var table = $('#datatables_salle').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            if ($tr.hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            var myWindow = window.open("?action=postebysalle&nSalle="+ data[0], "_self");
        });

        // table.on('click', '.remove', function(e) {
        //     $tr = $(this).closest('tr');

        //     if ($tr.hasClass('child')) {
        //         $tr = $tr.prev('.parent');
        //     }
        //     if (confirm("Voulez-vous supprimer cet élément ?")) {
    
        //         var data = table.row($tr).data();
        //         var myWindow = window.open("../../../Model/forms/form_suppression-materiel.php?id=" + data[0], "_self");
	    //     }
        // });

    })


</script>
