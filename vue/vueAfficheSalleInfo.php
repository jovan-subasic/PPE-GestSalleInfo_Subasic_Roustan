<html>
	<div class="content">
		<div class="container-fluid"> 
			<div class="header"><!---------------------------------------------Petit Materiel----------------------------------------------------------->
				<h4 class="title">Liste Salle
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
					<path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
					<path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
					<path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
					</svg>    
				</h4>
			</div>    
			<div class="toggle">
				<div class="content">
					<table id="datatables_salle" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%; text-align: center;"> 
						<thead>
							<tr>
								<th class="text-center">n°Salle</th>
								<th class="text-center">Nom de Salle</th>
								<th class="text-center">Nombre de Poste</th>
								<th class="text-center">IP</th>
								<th class="text-center">Room Name</th>
								<th class="text-center">Sort-key</th>
								<th class="text-center">Description</th>
								<th class="text-center">Capacité</th>
								<!-- <th class="text-center">Action</th> -->
							</tr>
						</thead>
						<tbody>
						<?php
							foreach ($salleinfos as $salleinfo)
							{
						?> 
						<tr>
							<td class="edit"><?php echo $salleinfo->getNSalle() ?></td>
							<td class="edit"><?php echo $salleinfo->getNomSalle() ?></td>
							<td class="edit"><?php echo $salleinfo->getNbPoste() ?></td>
							<td class="edit"><?php echo $salleinfo->getIndIP() ?></td>
							<td class="edit"><?php echo $salleinfo->getRoom_name() ?></td>
							<td class="edit"><?php echo $salleinfo->getSort_key() ?></td>
							<td class="edit"><?php echo $salleinfo->getDescription() ?></td>
							<td class="edit"><?php echo $salleinfo->getCapacity() ?></td> 
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

</html>

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
            var myWindow = window.open("collaborateur_materiel-affichage.php?nSalle=" + data[0], "_self");
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